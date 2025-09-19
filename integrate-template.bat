@echo off
echo ========================================
echo Integrating Dashmin Template
echo ========================================

echo.
echo [1/4] Creating assets directory...
if not exist public\assets (
    mkdir public\assets
)

echo.
echo [2/4] Copying template assets...
if exist "Dashmin_Light\Dashmin_html\assets" (
    xcopy "Dashmin_Light\Dashmin_html\assets" "public\assets" /E /I /Y
    echo ✅ Light theme assets copied
) else (
    echo ❌ Light theme assets not found
)

echo.
echo [3/4] Creating template views...
if not exist resources\views\templates (
    mkdir resources\views\templates
)

echo.
echo [4/4] Creating template controller...
if not exist app\Http\Controllers (
    mkdir app\Http\Controllers
)

echo.
echo ========================================
echo Template integration completed!
echo ========================================
echo.
echo Template assets are now available at:
echo public/assets/
echo.
echo You can now use the template in your views by referencing:
echo /assets/css/style.css
echo /assets/js/script.js
echo.
pause
