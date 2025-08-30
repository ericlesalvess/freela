#!/bin/bash

echo "🛑 Parando containers e Docker..."

# Parar containers do projeto
echo "🔄 Parando containers do projeto..."
docker compose down --remove-orphans 2>/dev/null || true

# Parar Docker
echo "🔄 Parando serviços Docker..."
sudo systemctl stop docker.socket
sudo systemctl stop docker.service
sudo systemctl stop containerd

echo "⏳ Aguardando finalização..."
sleep 3

# Matar processos restantes se necessário
echo "🧹 Limpando processos restantes..."
sudo pkill -f docker-proxy 2>/dev/null || true
sudo pkill -f containerd-shim 2>/dev/null || true

# Liberar portas do projeto
echo "🔌 Liberando portas..."
sudo fuser -k 8000/tcp 2>/dev/null || true
sudo fuser -k 3307/tcp 2>/dev/null || true
sudo fuser -k 5173/tcp 2>/dev/null || true
sudo fuser -k 1026/tcp 2>/dev/null || true
sudo fuser -k 8026/tcp 2>/dev/null || true

echo "✅ Docker e containers parados!"

#Para SUBIR os containers utilize ./docker-start.sh
#Para PARAR os containers utilize ./docker-stop.sh