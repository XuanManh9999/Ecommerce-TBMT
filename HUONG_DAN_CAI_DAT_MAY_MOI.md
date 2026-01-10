# 🚀 HƯỚNG DẪN CÀI ĐẶT TRÊN MÁY MỚI

## 📋 BƯỚC 1: CHUẨN BỊ MÔI TRƯỜNG

### Cài đặt các phần mềm cần thiết:

1. **XAMPP/WAMP/MAMP** (hoặc PHP + MySQL riêng)

    - Download: https://www.apachefriends.org/
    - Đảm bảo PHP >= 7.3

2. **Composer**

    - Download: https://getcomposer.org/download/
    - Verify: `composer --version`

3. **Node.js & NPM**

    - Download: https://nodejs.org/
    - Verify: `node --version` và `npm --version`

4. **Git** (nếu clone từ repository)
    - Download: https://git-scm.com/

---

## 📁 BƯỚC 2: COPY PROJECT

### Cách 1: Copy thư mục

```bash
# Copy toàn bộ folder Ecommerce_TBMT sang máy mới
# Đặt vào thư mục: C:\xampp\htdocs\Ecommerce_TBMT
```

### Cách 2: Clone từ Git

```bash
cd C:\xampp\htdocs
git clone <repository-url>
cd Ecommerce_TBMT
```

---

## 🔧 BƯỚC 3: CÀI ĐẶT DEPENDENCIES

Mở **Terminal/CMD** tại thư mục project:

```bash
# Di chuyển vào thư mục project
cd C:\xampp\htdocs\Ecommerce_TBMT

# Cài đặt PHP dependencies
composer install

# Cài đặt JavaScript dependencies
npm install
```

⏱️ **Thời gian**: 5-10 phút tùy tốc độ mạng

---

## ⚙️ BƯỚC 4: CẤU HÌNH ENVIRONMENT

### 4.1. Tạo file .env

```bash
# Copy file .env.example thành .env
copy .env.example .env

# Hoặc trên Mac/Linux:
cp .env.example .env
```

### 4.2. Generate Application Key

```bash
php artisan key:generate
```

### 4.3. Chỉnh sửa file .env

Mở file `.env` và cấu hình:

```env
APP_NAME="Ecommerce TBMT"
APP_ENV=local
APP_KEY=base64:xxx (đã tự động tạo)
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_tbmt
DB_USERNAME=root
DB_PASSWORD=              # Để trống nếu dùng XAMPP mặc định

# Mail Configuration (Tùy chọn - để sau)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

# PayPal (Tùy chọn)
PAYPAL_MODE=sandbox
PAYPAL_SANDBOX_CLIENT_ID=
PAYPAL_SANDBOX_CLIENT_SECRET=

# SePay (Tùy chọn)
SEPAY_API_KEY=
SEPAY_ACCOUNT_NUMBER=
```

---

## 🗄️ BƯỚC 5: TẠO VÀ CẤU HÌNH DATABASE

### 5.1. Khởi động MySQL

```bash
# Khởi động XAMPP Control Panel
# Start Apache và MySQL
```

### 5.2. Tạo Database

**Cách 1: Qua phpMyAdmin**

1. Mở trình duyệt: `http://localhost/phpmyadmin`
2. Click "New" ở sidebar trái
3. Nhập tên database: `ecommerce_tbmt`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"

**Cách 2: Qua MySQL Command Line**

```sql
CREATE DATABASE ecommerce_tbmt CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

---

## 🎯 BƯỚC 6: CHẠY MIGRATIONS VÀ SEEDERS

```bash
# Chạy migrations và seeders (tạo bảng + dữ liệu mẫu)
php artisan migrate:fresh --seed
```

✅ **Lệnh này sẽ:**

-   Xóa tất cả bảng cũ (nếu có)
-   Tạo lại tất cả bảng mới
-   Tự động điền dữ liệu mẫu:
    -   3 Users (1 Admin + 2 Users)
    -   8 Categories
    -   6 Products
    -   5 Brands
    -   4 Blog Posts
    -   3 Banners
    -   3 Shipping methods
    -   Settings

⏱️ **Thời gian**: 1-2 phút

---

## 📦 BƯỚC 7: TẠO STORAGE LINK

```bash
php artisan storage:link
```

✅ Lệnh này tạo symbolic link để truy cập files upload

---

## 🎨 BƯỚC 8: COMPILE ASSETS

### Cho Development (khuyên dùng)

```bash
npm run dev
```

### Cho Production (khi deploy)

```bash
npm run prod
```

⏱️ **Thời gian**: 2-3 phút

---

## 🚀 BƯỚC 9: CHẠY SERVER

### Cách 1: PHP Artisan Serve (Khuyên dùng để test)

```bash
php artisan serve
```

Truy cập: **http://localhost:8000**

### Cách 2: XAMPP Virtual Host

Truy cập: **http://localhost/Ecommerce_TBMT/public**

---

## 👥 BƯỚC 10: ĐĂNG NHẬP VÀ KIỂM TRA

### 🔐 Tài khoản Admin

-   **URL**: http://localhost:8000/admin
-   **Email**: admin@gmail.com
-   **Password**: admin123

### 👤 Tài khoản User

-   **Email**: user@gmail.com
-   **Password**: user123

### Tài khoản User 2

-   **Email**: nguyenvana@gmail.com
-   **Password**: password123

---

## ✅ CHECKLIST HOÀN THÀNH

Đánh dấu ✓ vào các bước đã làm:

-   [ ] Cài đặt XAMPP/PHP
-   [ ] Cài đặt Composer
-   [ ] Cài đặt Node.js & NPM
-   [ ] Copy/Clone project
-   [ ] Chạy `composer install`
-   [ ] Chạy `npm install`
-   [ ] Copy file `.env`
-   [ ] Generate App Key
-   [ ] Cấu hình `.env`
-   [ ] Tạo database `ecommerce_tbmt`
-   [ ] Chạy `php artisan migrate:fresh --seed`
-   [ ] Chạy `php artisan storage:link`
-   [ ] Chạy `npm run dev`
-   [ ] Chạy `php artisan serve`
-   [ ] Đăng nhập thành công

---

## 🔧 CÁC LỆNH HỮU ÍCH

### Clear Cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Tái tạo Database (nếu có lỗi)

```bash
php artisan migrate:fresh --seed
```

### Xem danh sách Routes

```bash
php artisan route:list
```

### Cache cho Production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🐛 XỬ LÝ LỖI THƯỜNG GẶP

### Lỗi 1: "Class not found"

```bash
composer dump-autoload
```

### Lỗi 2: "Permission denied" (Linux/Mac)

```bash
sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache
```

### Lỗi 3: "SQLSTATE[HY000] [1045] Access denied"

-   Kiểm tra lại thông tin database trong `.env`
-   Đảm bảo MySQL đang chạy

### Lỗi 4: "No application encryption key"

```bash
php artisan key:generate
```

### Lỗi 5: "The stream or file could not be opened"

```bash
# Windows
cd storage
mkdir -p framework/{sessions,views,cache}
mkdir -p logs

# Linux/Mac
mkdir -p storage/framework/{sessions,views,cache}
mkdir -p storage/logs
chmod -R 775 storage
```

### Lỗi 6: Không load được CSS/JS

```bash
npm run dev
php artisan storage:link
```

### Lỗi 7: "Target class does not exist"

```bash
composer dump-autoload
php artisan cache:clear
```

---

## 📱 KIỂM TRA CHỨC NĂNG

Sau khi cài đặt xong, test các chức năng:

### Frontend

-   ✅ Trang chủ hiển thị đúng
-   ✅ Xem danh sách sản phẩm
-   ✅ Tìm kiếm sản phẩm
-   ✅ Thêm vào giỏ hàng
-   ✅ Xem giỏ hàng
-   ✅ Đăng ký/Đăng nhập user
-   ✅ Checkout

### Backend (Admin)

-   ✅ Đăng nhập admin
-   ✅ Dashboard hiển thị
-   ✅ Quản lý sản phẩm
-   ✅ Quản lý đơn hàng
-   ✅ Quản lý users
-   ✅ Settings

---

## 📞 HỖ TRỢ

Nếu gặp vấn đề:

1. **Kiểm tra requirements**:

    - PHP >= 7.3
    - Composer installed
    - Node.js installed
    - MySQL running

2. **Xem logs**:

    ```bash
    # Logs trong:
    storage/logs/laravel.log
    ```

3. **Enable debug mode**:
    ```env
    # Trong file .env
    APP_DEBUG=true
    ```

---

## 🎉 HOÀN THÀNH!

Nếu tất cả các bước trên đều thành công, bạn đã có một website E-commerce hoàn chỉnh với:

-   ✅ 6 sản phẩm mẫu
-   ✅ 8 danh mục
-   ✅ 4 bài blog
-   ✅ 3 tài khoản user
-   ✅ Hệ thống giỏ hàng
-   ✅ Hệ thống thanh toán
-   ✅ Admin panel đầy đủ

---

**📖 Xem thêm**: [INSTALLATION.md](INSTALLATION.md) để biết chi tiết kỹ thuật

**⏱️ Tổng thời gian cài đặt**: 15-20 phút

**💡 Tip**: Lưu lại file này để dễ cài đặt lần sau!
