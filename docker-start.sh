#!/bin/bash

echo "🚀 Iniciando Docker e containers..."

# Iniciar Docker
echo "🔄 Iniciando serviços Docker..."
sudo systemctl start docker.service
sudo systemctl start docker.socket

echo "⏳ Aguardando Docker inicializar..."
sleep 5

# Verificar se Docker está funcionando
if ! docker ps >/dev/null 2>&1; then
    echo "❌ Erro: Docker não está funcionando!"
    echo "📋 Status do Docker:"
    sudo systemctl status docker
    exit 1
fi

echo "✅ Docker iniciado com sucesso!"

# Limpar containers antigos
echo "🧹 Limpando containers antigos..."
docker compose down --remove-orphans 2>/dev/null || true

# Subir containers
echo "🚀 Subindo containers..."
docker compose up -d --build

echo "⏳ Aguardando containers iniciarem..."
sleep 10

echo "✅ Containers iniciados!"
echo "📋 Status dos containers:"
docker compose ps

echo ""
echo "🌐 Aplicação disponível em:"
echo "   Laravel: http://localhost:8000"
echo "   MailHog: http://localhost:8026"
echo ""
echo "🔧 Comandos de desenvolvimento:"
echo "   Ver logs: docker compose logs [serviço]"
echo "   Entrar no container: docker compose exec app bash"
echo "   Migrations: docker compose exec app php artisan migrate"
echo "   Seeders: docker compose exec app php artisan db:seed"
echo "   Parar containers: ./docker-stop.sh"

#Para SUBIR os containers utilize ./docker-start.sh
#Para PARAR os containers utilize ./docker-stop.sh