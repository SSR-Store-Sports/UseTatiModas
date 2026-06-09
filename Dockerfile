# === Estágio 1: Build do Frontend (Tailwind) ===
FROM node:20-alpine AS frontend-builder
WORKDIR /app
RUN npm install -g pnpm
COPY package.json pnpm-lock.yaml* ./
RUN pnpm install
COPY . .
RUN pnpm run build

# === Estágio 2: Ambiente de Produção PHP ===
# Atualizado para PHP 8.4 para satisfazer os requisitos do Laravel 13 e Symfony 8
FROM php:8.4-apache
USER root

# Instala extensões PHP necessárias para o Laravel e o Composer
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura o Apache para apontar para a pasta /public do Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite

WORKDIR /var/www/html
COPY . .

# Copia os assets compilados do estágio anterior (Vite/Tailwind)
COPY --from=frontend-builder /app/public/build ./public/build

# Instala as dependências do PHP sem ambiente de desenvolvimento
RUN composer install --no-dev --optimize-autoloader

# Permissões necessárias para o Laravel escrever em cache/storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# Copia o script para dentro do container
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Dá permissão de execução para o script
RUN chmod +x /usr/local/bin/entrypoint.sh

# Define o script como o comando de inicialização
CMD ["/usr/local/bin/entrypoint.sh"]
