@echo off
echo ========================================
echo Testing Power Project Locally
echo ========================================

echo.
echo [1/3] Checking PHP installation...
php --version
if %errorlevel% neq 0 (
    echo ERROR: PHP is not installed or not in PATH
    echo Please install PHP 8.2+ and add it to your PATH
    pause
    exit /b 1
)

echo.
echo [2/3] Installing Composer dependencies...
composer install --no-dev --optimize-autoloader
if %errorlevel% neq 0 (
    echo ERROR: Failed to install Composer dependencies
    pause
    exit /b 1
)

echo.
echo [3/3] Generating application key...
php artisan key:generate
if %errorlevel% neq 0 (
    echo ERROR: Failed to generate application key
    pause
    exit /b 1
)

echo.
echo ========================================
echo Local test completed successfully!
echo ========================================
echo.
echo To run the application locally:
echo php artisan serve
echo.
echo Then visit: http://localhost:8000
echo.
pause
