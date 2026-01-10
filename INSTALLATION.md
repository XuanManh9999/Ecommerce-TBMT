# Hướng Dẫn Cài Đặt E-commerce TBMT

## Yêu Cầu Hệ Thống
- PHP >= 7.3
- Composer
- MySQL/MariaDB
- Node.js & NPM

## Các Bước Cài Đặt

### 1. Clone hoặc Copy Project

### 2. Cài Đặt Dependencies
```bash
composer install
npm install
```

### 3. Cấu Hình Environment
```bash
cp .env.example .env
php artisan key:generate
```

Chỉnh sửa file `.env` với thông tin database của bạn:
```
DB_DATABASE=ecommerce_tbmt
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Tạo Database
Tạo database mới trong MySQL:
```sql
CREATE DATABASE ecommerce_tbmt;
```

### 5. Chạy Migrations và Seeders
```bash
php artisan migrate:fresh --seed
```

Lệnh này sẽ:
- Tạo tất cả các bảng trong database
- Tự động điền dữ liệu mẫu bao gồm:
  - ✓ 3 Users (1 Admin, 2 User thường)
  - ✓ Categories và Sub-categories
  - ✓ 6 Sản phẩm mẫu
  - ✓ Brands
  - ✓ Banners
  - ✓ Blog Posts và Categories
  - ✓ Shipping methods
  - ✓ Settings

### 6. Tạo Storage Link
```bash
php artisan storage:link
```

### 7. Compile Assets
```bash
npm run dev
# hoặc cho production
npm run prod
```

### 8. Chạy Server
```bash
php artisan serve
```

Truy cập: `http://localhost:8000`

## Thông Tin Đăng Nhập

### Admin Panel
- URL: `http://localhost:8000/admin`
- Email: `admin@gmail.com`
- Password: `admin123`

### User Account
- Email: `user@gmail.com`
- Password: `user123`

### User Account 2
- Email: `nguyenvana@gmail.com`
- Password: `password123`

## Các Lệnh Hữu Ích

### Xóa và Tạo Lại Database
```bash
php artisan migrate:fresh --seed
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Tạo Lại Route Cache
```bash
php artisan route:cache
```

## Tính Năng Chính

- ✅ Quản lý sản phẩm, danh mục, thương hiệu
- ✅ Giỏ hàng và Wishlist
- ✅ Thanh toán (COD, PayPal, QR Pay)
- ✅ Quản lý đơn hàng
- ✅ Blog system
- ✅ Product reviews
- ✅ Coupon system
- ✅ User authentication
- ✅ Admin dashboard
- ✅ Responsive design

## Cấu Trúc Migrations (2026)

Tất cả migrations đã được cập nhật sang năm 2026 theo thứ tự:
- 2026_01_10_000000 → 2026_01_11_040000

## Troubleshooting

### Lỗi "Class not found"
```bash
composer dump-autoload
```

### Lỗi Permission
```bash
chmod -R 775 storage bootstrap/cache
```

### Lỗi "Migration table already exists"
```bash
php artisan migrate:fresh --seed
```

## Support
Nếu gặp vấn đề, vui lòng kiểm tra:
1. PHP version >= 7.3
2. Đã cài đặt tất cả extensions PHP cần thiết
3. Database connection trong .env đúng
4. Storage link đã tạo

---
**Project: Ecommerce TBMT**
**Version: 2.0 (2026)**
**Laravel Version: 7.x**
