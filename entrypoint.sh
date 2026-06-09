#!/bin/sh

mkdir -p /var/www/html/storage/app/public/products

rm -f /var/www/html/public/storage

echo "Criando link simbólico do storage..."
php artisan storage:link --force

echo "Ajustando permissões de uploads..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/public/storage
chmod -R 755 /var/www/html/storage/app/public

php artisan config:clear
php artisan view:clear

# 6. Inicia o servidor Apache
echo "Iniciando o Apache..."
exec apache2-foreground