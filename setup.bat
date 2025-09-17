@echo off
setlocal enabledelayedexpansion

echo Starting Laravel setup in Docker container...

REM Install Composer dependencies
echo Installing Composer dependencies...
docker-compose exec app composer install

REM Check for .env file
IF NOT EXIST ".env" (
    echo .env file not found – copying from .env.example
    copy .env.example .env
) ELSE (
    echo .env file found.
)

REM Generate application key
echo Generating APP_KEY...
docker-compose exec app php artisan key:generate

REM Set file permissions (may be limited on Windows)
echo 🔧 Setting storage/cache permissions...
docker-compose exec app sh -c "chown -R www-data:www-data storage bootstrap/cache && chmod -R 775 storage bootstrap/cache"

REM Ask to run migrations
set /p RUN_MIGRATIONS= Do you want to run migrations now? (y/n): 
if /i "!RUN_MIGRATIONS!"=="y" (
    docker-compose exec app php artisan migrate
)

echo Laravel setup complete!