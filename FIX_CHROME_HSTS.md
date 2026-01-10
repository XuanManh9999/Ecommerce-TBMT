# 🚨 FIX NGAY - CHROME ĐANG BẮT DÙNG HTTPS

## ❌ VẤN ĐỀ

Server log của bạn đang hiển thị:
```
Invalid request (Unsupported SSL request)
```

Điều này có nghĩa: **Chrome đang TỰ ĐỘNG chuyển tất cả requests sang HTTPS** nhưng server của bạn chỉ hỗ trợ HTTP.

## ✅ GIẢI PHÁP DUY NHẤT

### 🎯 BẮT BUỘC LÀM 3 BƯỚC NÀY (KHÔNG BỎ QUA!)

---

### BƯỚC 1: CLEAR HSTS TRONG CHROME ⭐⭐⭐

1. **Mở Chrome**

2. **Copy-paste** vào address bar (không phải Google search):
   ```
   chrome://net-internals/#hsts
   ```
   *(Nhấn Enter)*

3. **Scroll xuống** tìm phần **"Delete domain security policies"**

4. **Nhập vào ô "Domain"**: 
   ```
   127.0.0.1
   ```

5. **Click nút "Delete"**

6. **QUAN TRỌNG**: Làm thêm lần nữa với:
   ```
   localhost
   ```
   *(Nhập "localhost" và click "Delete")*

7. **ĐÓNG HOÀN TOÀN CHROME** (tất cả tabs, tất cả cửa sổ)

8. **Mở lại Chrome**

---

### BƯỚC 2: STOP SERVER VÀ START LẠI

1. **Vào terminal đang chạy server**

2. **Nhấn**: `Ctrl + C` (để stop)

3. **Chờ 2 giây**

4. **Start lại**:
   ```bash
   php artisan serve --host=localhost --port=8000
   ```

---

### BƯỚC 3: TRUY CẬP ĐÚNG URL

**QUAN TRỌNG**: Nhập **CHÍNH XÁC** URL này vào address bar:

```
http://localhost:8000
```

**⚠️ LƯU Ý**:
- ✅ `http://` (KHÔNG phải `https://`)
- ✅ `localhost` (KHÔNG phải `127.0.0.1`)
- ✅ Gõ TAY vào address bar, không click bookmark cũ

---

## 🔍 KIỂM TRA BẠN ĐÃ LÀM ĐÚNG CHƯA

### Check 1: URL trong address bar
```
✅ ĐÚNG: http://localhost:8000
❌ SAI:  https://localhost:8000
❌ SAI:  http://127.0.0.1:8000
❌ SAI:  https://127.0.0.1:8000
```

### Check 2: Server log
Sau khi làm đúng, server log phải hiển thị:
```
[200]: GET /about-us
```
**KHÔNG phải:**
```
Invalid request (Unsupported SSL request)
```

---

## 💡 NẾU VẪN KHÔNG ĐƯỢC

### Option A: Dùng Incognito Mode
1. **Đóng tất cả Chrome**
2. **Mở Chrome Incognito**: `Ctrl + Shift + N`
3. **Gõ**: `http://localhost:8000`

### Option B: Clear TẤT CẢ Chrome Data
1. Chrome Settings → Privacy and security
2. **Clear browsing data**
3. **Time range**: All time
4. **Check TẤT CẢ boxes**
5. **Clear data**
6. **Restart Chrome**

### Option C: Dùng Port Khác
Stop server, rồi:
```bash
php artisan serve --port=8080
```
Truy cập: `http://127.0.0.1:8080`

### Option D: Dùng Browser Khác
- Firefox
- Edge
- Brave

---

## 🎬 VIDEO HƯỚNG DẪN (Làm theo từng bước)

### Bước chi tiết:

**1. Clear HSTS:**
```
Mở Chrome
→ Gõ: chrome://net-internals/#hsts
→ Scroll xuống "Delete domain security policies"
→ Nhập: 127.0.0.1
→ Click: Delete
→ Nhập: localhost
→ Click: Delete
→ ĐÓNG HOÀN TOÀN CHROME
```

**2. Restart Server:**
```
Terminal
→ Ctrl + C (stop server)
→ php artisan serve --host=localhost --port=8000
→ Đợi thấy "Laravel development server started"
```

**3. Truy cập:**
```
Mở Chrome MỚI
→ GÕ TAY: http://localhost:8000
→ Nhấn Enter
```

---

## ⚡ SCRIPT TỰ ĐỘNG

Tôi đã tạo file **`start-server.bat`** trong thư mục project.

**Cách dùng:**
1. **Stop server hiện tại** (Ctrl + C)
2. **Double-click** file `start-server.bat`
3. Server sẽ tự động start với `localhost`

---

## 📞 VẪN KHÔNG ĐƯỢC?

Nếu làm TẤT CẢ các bước trên mà vẫn lỗi:

1. **Chụp ảnh**:
   - Chrome address bar (phải thấy URL đầy đủ)
   - Terminal server log (10 dòng cuối)
   
2. **Check**:
   - Antivirus/Firewall đang bật?
   - VPN đang chạy?
   - Proxy settings trong Chrome?

---

## ✅ CHECKLIST

Đánh dấu ✓ những gì bạn đã làm:

- [ ] Vào chrome://net-internals/#hsts
- [ ] Delete domain: 127.0.0.1
- [ ] Delete domain: localhost
- [ ] Đóng HOÀN TOÀN Chrome
- [ ] Stop server (Ctrl + C)
- [ ] Start server: php artisan serve --host=localhost --port=8000
- [ ] Mở Chrome mới
- [ ] Gõ TAY: http://localhost:8000

Nếu tất cả ✓ → Website PHẢI chạy!

---

**99% các trường hợp là do chưa clear HSTS hoặc vẫn dùng 127.0.0.1 thay vì localhost!**
