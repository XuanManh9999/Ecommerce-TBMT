# 🛒 E-commerce TBMT

Hệ thống thương mại điện tử đầy đủ được xây dựng bằng Laravel 7.x với giao diện hiện đại và responsive.

![Laravel](https://img.shields.io/badge/Laravel-7.x-red)
![PHP](https://img.shields.io/badge/PHP-7.3+-blue)
![License](https://img.shields.io/badge/License-MIT-green)

## ✨ Tính Năng Chính

### 🎯 Frontend
- ✅ Trang chủ với slider và sản phẩm nổi bật
- ✅ Danh sách sản phẩm với filter và search
- ✅ Chi tiết sản phẩm với reviews
- ✅ Giỏ hàng và Wishlist
- ✅ Thanh toán đa phương thức (COD, PayPal, QR Pay)
- ✅ Theo dõi đơn hàng
- ✅ Blog với categories và tags
- ✅ User profile và order history
- ✅ Responsive design

### 🔧 Backend (Admin Panel)
- ✅ Dashboard với thống kê
- ✅ Quản lý sản phẩm (CRUD)
- ✅ Quản lý danh mục và thương hiệu
- ✅ Quản lý đơn hàng
- ✅ Quản lý users
- ✅ Quản lý blog posts
- ✅ Quản lý banners và sliders
- ✅ Quản lý coupons
- ✅ Quản lý shipping methods
- ✅ Product reviews management
- ✅ Settings configuration
- ✅ File manager

### 💳 Payment Methods
- 💵 Cash on Delivery (COD)
- 💳 PayPal Integration
- 📱 QR Pay (SePay Integration)

## 🚀 Cài Đặt Nhanh

### Bước 1: Clone Project
```bash
git clone <repository-url>
cd Ecommerce_TBMT
```

### Bước 2: Install Dependencies
```bash
composer install
npm install
```

### Bước 3: Cấu Hình Environment
```bash
cp .env.example .env
php artisan key:generate
```

Chỉnh sửa `.env`:
```env
DB_DATABASE=ecommerce_tbmt
DB_USERNAME=root
DB_PASSWORD=your_password
```

### Bước 4: Setup Database
```bash
# Tạo database
CREATE DATABASE ecommerce_tbmt;

# Chạy migrations và seeders
php artisan migrate:fresh --seed
```

### Bước 5: Storage Link & Assets
```bash
php artisan storage:link
npm run dev
```

### Bước 6: Run Server
```bash
php artisan serve
```

Truy cập: **http://localhost:8000**

## 👥 Tài Khoản Mặc Định

### Admin Account
- **URL**: http://localhost:8000/admin
- **Email**: admin@gmail.com
- **Password**: admin123

### User Account
- **Email**: user@gmail.com
- **Password**: user123

## 📊 Database Schema

### Migrations (Năm 2026)
Tất cả migrations đã được cập nhật sang năm 2026:
```
2026_01_10_000000 - Users
2026_01_10_100000 - Brands
2026_01_10_120000 - Categories
2026_01_10_130000 - Products
2026_01_10_190000 - Orders
... và nhiều hơn nữa
```

### Seeders Có Sẵn
- ✅ **UserSeeder**: 3 users (1 admin, 2 users)
- ✅ **CategorySeeder**: 8 categories với parent/child
- ✅ **ProductSeeder**: 6 sản phẩm mẫu
- ✅ **BrandSeeder**: 5 brands
- ✅ **PostSeeder**: 4 blog posts
- ✅ **SettingsSeeder**: Cấu hình mặc định
- ✅ **ShippingSeeder**: 3 phương thức vận chuyển
- ✅ **BannerSeeder**: 3 banners

## 📁 Cấu Trúc Project

```
Ecommerce_TBMT/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── ProductController.php
│   │   │   ├── OrderController.php
│   │   │   ├── CartController.php
│   │   │   └── ...
│   │   └── Helpers.php
│   └── Models/
│       ├── Product.php
│       ├── Category.php
│       ├── Order.php
│       └── ...
├── database/
│   ├── migrations/ (2026_*)
│   └── seeders/
│       ├── DatabaseSeeder.php
│       ├── UserSeeder.php
│       └── ...
├── resources/
│   └── views/
│       ├── frontend/
│       ├── backend/
│       └── user/
├── routes/
│   ├── web.php
│   └── api.php
└── public/
```

## 🛠️ Công Nghệ Sử Dụng

- **Backend**: Laravel 7.x
- **Frontend**: Bootstrap 4, jQuery
- **Database**: MySQL/MariaDB
- **Payment**: PayPal SDK, SePay
- **File Upload**: Laravel Storage
- **Charts**: Chart.js
- **Icons**: Font Awesome

## 📝 Các Lệnh Artisan Hữu Ích

```bash
# Migrate & Seed
php artisan migrate:fresh --seed

# Clear Cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Create Storage Link
php artisan storage:link

# Route Cache (Production)
php artisan route:cache
php artisan config:cache
```

## 🔐 Security Features

- ✅ CSRF Protection
- ✅ Password Hashing (Bcrypt)
- ✅ SQL Injection Prevention (Eloquent ORM)
- ✅ XSS Protection
- ✅ Authentication & Authorization
- ✅ Role-based Access Control (Admin/User)

## 📱 Responsive Design

Website hoạt động tốt trên:
- 💻 Desktop
- 📱 Mobile
- 📟 Tablet

## 🐛 Đã Sửa Các Bug

Phiên bản này đã được kiểm tra và sửa **15 bugs nghiêm trọng**:
1. ✅ Route trùng lặp
2. ✅ Controller không tồn tại
3. ✅ Model thiếu
4. ✅ Use statement sai
5. ✅ Method không tồn tại
6. ✅ Lỗi bảo mật SQL injection
7. ✅ Route name conflicts
... và nhiều hơn nữa

## 📚 Documentation

Xem file [INSTALLATION.md](INSTALLATION.md) để biết hướng dẫn chi tiết.

## 🤝 Contributing

Contributions, issues và feature requests đều được chào đón!

## 📄 License

This project is [MIT](LICENSE) licensed.

## 👨‍💻 Author

**TBMT Team**

## 🙏 Acknowledgments

- Laravel Team
- Bootstrap Team
- All contributors

---

**⭐ Nếu project hữu ích, hãy cho 1 star nhé!**

**Version**: 2.0 (2026)  
**Last Updated**: January 10, 2026
