@echo off
echo ========================================
echo Building Power Project with Docker
echo ========================================

echo.
echo [1/4] Copying environment file...
if not exist .env (
    copy env.example .env
    echo .env file created from env.example
) else (
    echo .env file already exists
)

echo.
echo [2/4] Building Docker containers...
docker-compose build --no-cache

echo.
echo [3/4] Starting containers...
docker-compose up -d

echo.
echo [4/4] Installing dependencies and generating key...
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan config:cache

echo.
echo ========================================
echo Build completed successfully!
echo ========================================
echo.
echo Your application is now running at:
echo http://localhost:8000
echo.
echo To view logs: docker-compose logs -f
echo To stop: docker-compose down
echo.
pause
