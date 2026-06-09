#!/bin/sh

# Garante que a pasta database existe
mkdir -p /var/www/html/database

# Cria o arquivo do SQLite se ele não existir
if [ ! -f /var/www/html/database/database.sqlite ]; then
    echo "Criando o banco de dados SQLite..."
    touch /var/www/html/database/database.sqlite
fi

# Garante as permissões corretas de escrita para o Apache
chown -R www-data:www-data /var/www/html/database
chmod -R 775 /var/www/html/database

# Roda as migrations automaticamente em produção
echo "Rodando as migrations..."
php artisan migrate --force

# Inicia o servidor Apache em primeiro plano (comando padrão do container)
echo "Iniciando o Apache..."
exec apache2-foreground