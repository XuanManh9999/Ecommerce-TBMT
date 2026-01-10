@echo off
color 0C
cls
echo.
echo ============================================================
echo          EMERGENCY FIX - STOP ALL PHP SERVERS
echo ============================================================
echo.
echo Dang stop tat ca PHP processes...
echo.

taskkill /F /IM php.exe 2>nul
if %errorlevel%==0 (
    echo [OK] Da kill tat ca PHP processes
) else (
    echo [INFO] Khong co PHP process nao
)

timeout /t 3 >nul

echo.
echo ============================================================
echo   TAT CA PHP SERVERS DA DUNG!
echo ============================================================
echo.
echo BAY GIO HAY:
echo.
echo 1. Mo Chrome
echo 2. Vao: chrome://net-internals/#hsts
echo 3. Delete domain: 127.0.0.1
echo 4. Delete domain: localhost
echo 5. TAT HOAN TOAN CHROME
echo 6. Chay file: start-server.bat
echo.
echo ============================================================
pause
