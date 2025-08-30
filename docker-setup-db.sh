#!/bin/bash

echo "🗄️ Configurando banco de dados..."

echo "👤 Criando usuário MySQL..."
docker compose exec db mysql -u root -p12345678 -e "CREATE USER IF NOT EXISTS 'ericlesalvess'@'%' IDENTIFIED BY '12345678';" 2>/dev/null

echo "🔐 Concedendo permissões..."
docker compose exec db mysql -u root -p12345678 -e "GRANT ALL PRIVILEGES ON freela.* TO 'ericlesalvess'@'%';" 2>/dev/null

echo "💾 Aplicando permissões..."
docker compose exec db mysql -u root -p12345678 -e "FLUSH PRIVILEGES;" 2>/dev/null

echo "🗂️ Executando migrations..."
docker compose exec app php artisan migrate

echo "🌱 Executando seeders..."
docker compose exec app php artisan db:seed

echo "✅ Banco de dados configurado com sucesso!"
