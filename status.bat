@echo off
echo ========================================
echo Power Project Status Check
echo ========================================

echo.
echo [1/4] Checking Docker status...
docker --version >nul 2>&1
if %errorlevel% equ 0 (
    echo ✅ Docker is installed
    docker ps --format "table {{.Names}}\t{{.Status}}\t{{.Ports}}"
) else (
    echo ❌ Docker is not installed or not running
)

echo.
echo [2/4] Checking PHP status...
php --version >nul 2>&1
if %errorlevel% equ 0 (
    echo ✅ PHP is installed
    php --version
) else (
    echo ❌ PHP is not installed
)

echo.
echo [3/4] Checking Composer status...
composer --version >nul 2>&1
if %errorlevel% equ 0 (
    echo ✅ Composer is installed
    composer --version
) else (
    echo ❌ Composer is not installed
)

echo.
echo [4/4] Checking project files...
if exist composer.json (
    echo ✅ composer.json exists
) else (
    echo ❌ composer.json missing
)

if exist .env (
    echo ✅ .env file exists
) else (
    echo ❌ .env file missing
)

if exist artisan (
    echo ✅ artisan file exists
) else (
    echo ❌ artisan file missing
)

if exist docker-compose.yml (
    echo ✅ docker-compose.yml exists
) else (
    echo ❌ docker-compose.yml missing
)

echo.
echo ========================================
echo Project Structure:
echo ========================================
dir /b

echo.
echo ========================================
echo Available Commands:
echo ========================================
echo build.bat     - Build and start with Docker
echo start.bat     - Start Docker containers
echo stop.bat      - Stop Docker containers
echo test-local.bat - Test without Docker
echo.
pause
