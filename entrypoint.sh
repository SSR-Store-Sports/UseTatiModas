#!/bin/sh

# Cria o arquivo do banco diretamente na pasta temporária pública do Linux
if [ ! -f /tmp/database.sqlite ]; then
    echo "Criando o banco de dados em /tmp..."
    touch /tmp/database.sqlite
fi

# Dá permissão total para o Apache ler e escrever nesse arquivo
chown www-data:www-data /tmp/database.sqlite
chmod 666 /tmp/database.sqlite

# Roda as migrations para criar as tabelas de usuários, sessões, etc.
echo "Rodando as migrations..."
php artisan migrate --force

# Inicia o servidor Apache
echo "Iniciando o Apache..."
exec apache2-foreground