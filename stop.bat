@echo off
echo ========================================
echo Stopping Power Project
echo ========================================

echo.
echo Stopping Docker containers...
docker-compose down

echo.
echo ========================================
echo Application stopped successfully!
echo ========================================
echo.
pause
