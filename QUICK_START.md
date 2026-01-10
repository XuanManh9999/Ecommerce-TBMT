# ⚡ QUICK START - CÀI ĐẶT 5 PHÚT

## 📝 TÓM TẮT NHANH

```bash
# 1. Copy project vào thư mục web
cd C:\xampp\htdocs\Ecommerce_TBMT

# 2. Install dependencies
composer install
npm install

# 3. Tạo file .env
copy .env.example .env
php artisan key:generate

# 4. Cấu hình .env (chỉnh DB_DATABASE, DB_USERNAME, DB_PASSWORD)

# 5. Tạo database 'ecommerce_tbmt' trong phpMyAdmin

# 6. Migrate & Seed
php artisan migrate:fresh --seed

# 7. Storage link & Assets
php artisan storage:link
npm run dev

# 8. Run server
php artisan serve
```

## 🔐 ĐĂNG NHẬP

**Admin**: admin@gmail.com / admin123  
**User**: user@gmail.com / user123

**URL Admin**: http://localhost:8000/admin

---

## 📊 DỮ LIỆU CÓ SẴN SAU KHI SEED

- ✅ 3 Users (1 admin, 2 users)
- ✅ 8 Categories (3 parent, 5 child)
- ✅ 6 Products (Laptops, Phones, Clothing)
- ✅ 5 Brands (Apple, Samsung, Dell, HP, Nike)
- ✅ 4 Blog Posts
- ✅ 4 Post Categories
- ✅ 4 Post Tags
- ✅ 3 Banners
- ✅ 3 Shipping Methods
- ✅ 1 Settings (thông tin website)

---

## 🔧 LỆNH THƯỜNG DÙNG

```bash
# Xóa và tạo lại database
php artisan migrate:fresh --seed

# Clear all cache
php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear

# Rebuild assets
npm run dev

# Run server
php artisan serve
```

---

## ⚠️ LƯU Ý QUAN TRỌNG

1. **Database name**: `ecommerce_tbmt`
2. **PHP version**: >= 7.3
3. **MySQL phải running** trước khi migrate
4. **Seeders đã tạo sẵn users và products** - không cần thêm thủ công

---

## 🎯 SẢN PHẨM MẪU CÓ SẴN

1. Laptop Dell Inspiron 15 - 15,000,000đ
2. iPhone 15 Pro Max - 30,000,000đ  
3. Samsung Galaxy S24 Ultra - 25,000,000đ
4. Laptop HP Pavilion Gaming - 22,000,000đ
5. Men's Casual T-Shirt - 250,000đ
6. MacBook Pro 14 M3 - 45,000,000đ

---

**⏱️ Thời gian**: 5-10 phút (tùy tốc độ máy)
