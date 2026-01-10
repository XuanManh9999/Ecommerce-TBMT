# 🔧 ĐÃ FIX: Vấn đề tự động chuyển sang HTTPS

## ❌ VẤN ĐỀ ĐÃ PHÁT HIỆN

Khi click vào các link trong website, trang tự động chuyển từ `http://` sang `https://`, gây ra lỗi kết nối khi chạy local.

## ✅ NGUYÊN NHÂN

File: `app/Providers/AppServiceProvider.php`

**Dòng code SAI:**
```php
if(config('app.env')=== 'local'){ URL::forceScheme('https');}
```

❌ Code này đang **FORCE HTTPS** khi ở môi trường **LOCAL** - điều này SAI hoàn toàn!

## ✅ ĐÃ FIX

**Dòng code ĐÚNG:**
```php
// Force HTTPS only in production, NOT in local
if(config('app.env') === 'production') { 
    URL::forceScheme('https');
}
```

✅ Bây giờ chỉ force HTTPS khi ở **PRODUCTION**, LOCAL sẽ dùng HTTP.

## 🚀 CÁCH SỬ DỤNG

### Bước 1: Dừng tất cả PHP server đang chạy
```cmd
STOP-ALL-PHP.bat
```

### Bước 2: Khởi động lại server
```cmd
php artisan serve --host=localhost --port=8000
```

### Bước 3: Truy cập
```
http://localhost:8000
```

## 📝 GHI CHÚ

- **.env** đã đúng: `APP_URL=http://127.0.0.1:8000`
- **APP_ENV** nên là `local` trong file .env
- Nếu vẫn bị redirect HTTPS, xóa cache Chrome theo hướng dẫn trong `FIX_CHROME_HSTS.md`

## 🎉 KẾT QUẢ

Bây giờ khi click vào bất kỳ link nào trong website, nó sẽ giữ nguyên **HTTP** thay vì tự chuyển sang HTTPS!

---

**Fixed by: AI Assistant**  
**Date: 2026-01-10**
