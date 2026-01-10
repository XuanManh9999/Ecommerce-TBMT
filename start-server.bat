@echo off
echo ============================================
echo   FIX ERR_CONNECTION_CLOSED - Quick Script
echo ============================================
echo.

echo [1/3] Stopping any running PHP servers...
taskkill /F /IM php.exe 2>nul
timeout /t 2 >nul

echo.
echo [2/3] Clearing Laravel caches...
cd /d "%~dp0"
php artisan cache:clear
php artisan route:clear
php artisan config:clear
php artisan view:clear

echo.
echo [3/3] Starting server on localhost:8000...
echo.
echo ============================================
echo   Server is starting...
echo   Open browser and go to: http://localhost:8000
echo ============================================
echo.
echo   ** IMPORTANT: Use 'localhost' NOT '127.0.0.1' **
echo.
echo   If still error, follow these steps:
echo   1. Open Chrome: chrome://net-internals/#hsts
echo   2. Delete domain: 127.0.0.1
echo   3. Restart Chrome
echo   4. Go to: http://localhost:8000
echo.
echo   Press Ctrl+C to stop server
echo ============================================
echo.

php artisan serve --host=localhost --port=8000
