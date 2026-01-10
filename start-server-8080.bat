@echo off
color 0A
title Emergency Server - Port 8080

echo.
echo ============================================================
echo        EMERGENCY: Starting server on PORT 8080
echo ============================================================
echo.

echo [1/3] Stopping all PHP servers...
taskkill /F /IM php.exe 2>nul
timeout /t 2 >nul

echo [2/3] Clearing caches...
cd /d "%~dp0"
php artisan cache:clear >nul 2>&1
php artisan config:clear >nul 2>&1
php artisan route:clear >nul 2>&1

echo [3/3] Starting on port 8080...
echo.
echo ============================================================
echo   SERVER CHAY TAI: http://127.0.0.1:8080
echo ============================================================
echo.
echo   Mo browser, vao: http://127.0.0.1:8080
echo.
echo   (Port 8080 se tranh conflict voi Chrome HSTS)
echo.
echo   Nhan Ctrl+C de stop
echo ============================================================
echo.

php artisan serve --port=8080
