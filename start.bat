@echo off
echo ========================================
echo Starting Power Project
echo ========================================

echo.
echo Starting Docker containers...
docker-compose up -d

echo.
echo ========================================
echo Application started successfully!
echo ========================================
echo.
echo Your application is now running at:
echo http://localhost:8000
echo.
echo To view logs: docker-compose logs -f
echo To stop: docker-compose down
echo.
pause
