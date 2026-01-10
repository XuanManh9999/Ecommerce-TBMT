@echo off
chcp 65001 >nul
echo.
echo ============================================
echo   🔄 KHỞI ĐỘNG LẠI SERVER - ĐÃ FIX HTTPS
echo ============================================
echo.

echo [1/3] Đang dừng tất cả PHP processes...
powershell -Command "Get-Process -Name php -ErrorAction SilentlyContinue | Stop-Process -Force"
timeout /t 2 /nobreak >nul
echo ✅ Đã dừng PHP

echo.
echo [2/3] Xóa cache Laravel...
php artisan cache:clear >nul 2>&1
php artisan config:clear >nul 2>&1
echo ✅ Đã xóa cache

echo.
echo [3/3] Khởi động server mới...
echo.
echo ============================================
echo   ✅ SERVER ĐANG CHẠY
echo ============================================
echo.
echo   🌐 Truy cập: http://localhost:8000
echo   📝 Hoặc: http://127.0.0.1:8000
echo.
echo   ⚠️  LƯU Ý: Tất cả links bây giờ sẽ dùng HTTP
echo   ✅ Đã fix vấn đề tự động chuyển sang HTTPS
echo.
echo   Nhấn Ctrl+C để dừng server
echo ============================================
echo.

php artisan serve --host=localhost --port=8000
