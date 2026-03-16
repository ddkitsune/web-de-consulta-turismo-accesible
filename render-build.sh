#!/usr/bin/env bash
# exit on error
set -o errexit

# Instalar dependencias de PHP
composer install --prefer-dist --no-dev --optimize-autoloader --no-interaction

# Instalar dependencias de Node y compilar assets (Vite)
npm install
npm run build

# Limpiar cachés y optimizar Laravel
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ejecutar migraciones de la base de datos (con --force para producción)
php artisan migrate --force
