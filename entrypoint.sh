#!/bin/sh

# 1. Garante que as pastas de logs, cache e views do Laravel existem
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/bootstrap/cache

# 2. Dá permissão total para o Apache (www-data) ler e escrever nessas pastas de sistema
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 3. Cria o arquivo do banco diretamente na pasta temporária pública do Linux
if [ ! -f /tmp/database.sqlite ]; then
    echo "Criando o banco de dados em /tmp..."
    touch /tmp/database.sqlite
fi

chown www-data:www-data /tmp/database.sqlite
chmod 666 /tmp/database.sqlite

echo "Limpando caches antigos..."
php artisan config:clear
php artisan view:clear

echo "Rodando as migrations..."
php artisan migrate --force

echo "Iniciando o Apache..."
exec apache2-foreground