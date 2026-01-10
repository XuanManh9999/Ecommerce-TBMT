# 🔧 FIX LỖI "ERR_CONNECTION_CLOSED" - HSTS/HTTPS Issue

## ❌ Vấn đề: Browser cố kết nối HTTPS nhưng server chỉ HTTP

### Triệu chứng:
- Server log: "Invalid request (Unsupported SSL request)"
- Browser: ERR_CONNECTION_CLOSED
- URL: 127.0.0.1:8000 tự động chuyển sang HTTPS

---

## ✅ GIẢI PHÁP NHANH (Chọn 1 trong 3)

### 🎯 CÁCH 1: Clear HSTS Cache trong Chrome (KHUYÊN DÙNG)

1. **Mở Chrome**, gõ vào address bar:
   ```
   chrome://net-internals/#hsts
   ```

2. **Scroll xuống "Delete domain security policies"**

3. **Nhập domain**: `127.0.0.1`

4. **Click "Delete"**

5. **Restart Chrome** và thử lại: `http://127.0.0.1:8000`

---

### 🎯 CÁCH 2: Dùng Localhost thay vì 127.0.0.1

1. **Stop server hiện tại** (Ctrl + C trong terminal)

2. **Start lại server:**
   ```bash
   php artisan serve --host=localhost --port=8000
   ```

3. **Truy cập:** `http://localhost:8000` (KHÔNG dùng 127.0.0.1)

---

### 🎯 CÁCH 3: Dùng port khác

1. **Stop server hiện tại** (Ctrl + C)

2. **Start với port mới:**
   ```bash
   php artisan serve --port=8080
   ```

3. **Truy cập:** `http://127.0.0.1:8080`

---

## 🔍 KIỂM TRA THÊM

### 1. Đảm bảo URL trong browser là HTTP
```
✅ http://127.0.0.1:8000
❌ https://127.0.0.1:8000  (sai)
```

### 2. Clear Browser Cache
- **Chrome**: Ctrl + Shift + Delete → Clear browsing data
- Chọn: Cached images and files
- Click Clear data

### 3. Dùng Incognito Mode
- Mở Chrome Incognito: `Ctrl + Shift + N`
- Thử truy cập: `http://127.0.0.1:8000`

---

## 🚀 LỆNH CHẠY SERVER (Copy & Paste)

### Option 1: Localhost (Khuyên dùng)
```bash
cd d:\workspace\Code_Thue\Ecommerce_TBMT\Ecommerce_TBMT
php artisan serve --host=localhost --port=8000
```
**URL**: http://localhost:8000

### Option 2: Port 8080
```bash
cd d:\workspace\Code_Thue\Ecommerce_TBMT\Ecommerce_TBMT
php artisan serve --port=8080
```
**URL**: http://127.0.0.1:8080

### Option 3: IP cụ thể
```bash
cd d:\workspace\Code_Thue\Ecommerce_TBMT\Ecommerce_TBMT
php artisan serve --host=0.0.0.0 --port=8000
```
**URL**: http://localhost:8000

---

## ⚠️ LƯU Ý

1. **LUÔN dùng `http://`** chứ KHÔNG `https://`
2. Server mặc định của Laravel là **HTTP only**
3. Nếu muốn HTTPS, cần cài SSL certificate (không cần thiết cho development)

---

## 🎯 BƯỚC THỰC HIỆN NGAY

### Bước 1: Stop server hiện tại
- Vào terminal đang chạy server
- Nhấn: `Ctrl + C`

### Bước 2: Start lại với localhost
```bash
php artisan serve --host=localhost --port=8000
```

### Bước 3: Clear HSTS
- Vào: `chrome://net-internals/#hsts`
- Delete domain: `127.0.0.1`

### Bước 4: Truy cập
```
http://localhost:8000
```

---

## ✅ Nếu vẫn lỗi, thử:

1. **Clear ALL Chrome data**:
   - Settings → Privacy → Clear browsing data
   - Time range: All time
   - Select ALL checkboxes

2. **Restart máy**

3. **Dùng browser khác**: Firefox, Edge

4. **Check antivirus/firewall**: Tạm tắt để test

---

**90% trường hợp CÁCH 1 (Clear HSTS) + Dùng localhost sẽ fix được!**
