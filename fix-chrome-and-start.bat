@echo off
color 0A
title Fix Chrome HSTS - Ecommerce TBMT
cls

echo.
echo ========================================================
echo           FIX CHROME HTTPS REDIRECT ISSUE
echo ========================================================
echo.
echo [!] BAN DANG GAP LOI: Chrome tu dong chuyen sang HTTPS
echo [!] NGUYEN NHAN: HSTS cache trong Chrome
echo.
echo ========================================================
echo.

echo [BUOC 1/4] Dang stop cac PHP server...
taskkill /F /IM php.exe 2>nul
if %errorlevel%==0 (
    echo [OK] Da stop PHP servers
) else (
    echo [INFO] Khong co PHP server nao dang chay
)
timeout /t 2 >nul

echo.
echo [BUOC 2/4] Dang clear Laravel caches...
cd /d "%~dp0"
call php artisan cache:clear >nul 2>&1
call php artisan route:clear >nul 2>&1
call php artisan config:clear >nul 2>&1
call php artisan view:clear >nul 2>&1
echo [OK] Da clear caches

echo.
echo ========================================================
echo   [BUOC 3/4] BAN CAN LAM TAY (QUAN TRONG!)
echo ========================================================
echo.
echo   1. Mo Chrome (neu dang dong)
echo   2. Copy-paste vao address bar:
echo      chrome://net-internals/#hsts
echo.
echo   3. Scroll xuong "Delete domain security policies"
echo.
echo   4. Nhap vao o Domain: 127.0.0.1
echo      Roi click nut [Delete]
echo.
echo   5. Nhap vao o Domain: localhost
echo      Roi click nut [Delete]
echo.
echo   6. DONG HOAN TOAN CHROME (tat ca tab/cua so)
echo.
echo ========================================================
echo.

pause

echo.
echo [BUOC 4/4] Starting server...
echo.
echo ========================================================
echo   SERVER DANG CHAY!
echo ========================================================
echo.
echo   [V] Mo Chrome MOI
echo   [V] Gotype: http://localhost:8000
echo   [V] Nhan Enter
echo.
echo   ** LUU Y: Dung 'localhost' KHONG PHAI '127.0.0.1' **
echo.
echo   Nhan Ctrl+C de stop server
echo ========================================================
echo.

php artisan serve --host=localhost --port=8000

pause
