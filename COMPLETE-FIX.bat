@echo off
color 0E
cls

echo.
echo ============================================================
echo       COMPLETE FIX - KHOI DONG LAI HOAN TOAN
echo ============================================================
echo.

echo [1/5] Dang stop tat ca PHP servers...
taskkill /F /IM php.exe 2>nul
timeout /t 2 >nul

echo [2/5] Dang clear browser cache...
echo      (Ban can lam thu cong)
echo.
start chrome chrome://settings/clearBrowserData
timeout /t 3 >nul

echo.
echo ============================================================
echo   [QUAN TRONG] BAN CAN LAM TAY NGAY BAY GIO:
echo ============================================================
echo.
echo   Chrome da mo tab "Clear browsing data"
echo.
echo   1. Chon "Time range" = "All time"
echo   2. Check TAT CA cac o
echo   3. Click "Clear data"
echo   4. DOI chrome clear xong
echo   5. TAT HOAN TOAN CHROME (dong tat ca tab)
echo.
pause

echo.
echo [3/5] Dang clear HSTS...
start chrome chrome://net-internals/#hsts
echo.
echo ============================================================
echo   [QUAN TRONG] TRONG TAB CHROME VUA MO:
echo ============================================================
echo.
echo   1. Scroll xuong "Delete domain security policies"
echo   2. Nhap: 127.0.0.1   va click [Delete]
echo   3. Nhap: localhost   va click [Delete]
echo   4. TAT HOAN TOAN CHROME
echo.
pause

echo.
echo [4/5] Dang clear Laravel caches...
cd /d "%~dp0"
php artisan cache:clear >nul 2>&1
php artisan config:clear >nul 2>&1
php artisan route:clear >nul 2>&1
php artisan view:clear >nul 2>&1

echo [5/5] Starting server voi localhost...
echo.
echo ============================================================
echo   SERVER DANG CHAY TAI: http://localhost:8000
echo ============================================================
echo.
echo   [!] MO CHROME MOI (Incognito Mode)
echo   [!] Nhan: Ctrl + Shift + N
echo   [!] Gotype: http://localhost:8000
echo.
echo   ** NEU VAN LOI: Dung Firefox hoac Edge **
echo.
echo   Nhan Ctrl+C de stop
echo ============================================================
echo.

php artisan serve --host=localhost --port=8000
