#!/bin/sh

# 1. Cria o link simbólico da pasta storage
echo "Criando link simbólico do storage..."
php artisan storage:link --force

# 2. Garante que os arquivos enviados pelo controller ganhem a permissão correta de leitura
echo "Ajustando permissões de uploads..."
chmod -R 755 /var/www/html/storage/app/public

# 3. Limpa caches antigos de view e configurações
php artisan config:clear
php artisan view:clear

# 4. Inicia o servidor Apache
echo "Iniciando o Apache..."
exec apache2-foreground