#!/bin/sh

# Roda as migrations no banco de dados externo conectado
echo "Rodando as migrations no banco de dados..."
php artisan migrate --force

# Inicia o servidor Apache
echo "Iniciando o Apache..."
exec apache2-foreground