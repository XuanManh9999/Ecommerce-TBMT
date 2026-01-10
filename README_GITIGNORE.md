# 📝 Hướng dẫn sử dụng .gitignore

## ✅ Đã tạo file .gitignore chuẩn Laravel

File `.gitignore` đã được tạo với các nội dung quan trọng sau:

### 🔒 Các file QUAN TRỌNG được ignore (Không đẩy lên Git):

1. **File môi trường (Environment)**:
   - `.env` - Chứa thông tin nhạy cảm (database password, API keys)
   - `.env.backup` - Backup của file .env

2. **Thư mục dependencies**:
   - `/vendor/` - PHP packages (Composer)
   - `/node_modules/` - JavaScript packages (NPM)

3. **File cache và logs**:
   - `/storage/logs/*.log` - Log files
   - `/storage/framework/cache/*` - Cache files
   - `/storage/framework/sessions/*` - Session files
   - `/storage/framework/views/*` - Compiled views

4. **IDE files**:
   - `/.idea/` - PhpStorm
   - `/.vscode/` - VSCode
   - `*.sublime-*` - Sublime Text

5. **OS files**:
   - `.DS_Store` - macOS
   - `Thumbs.db` - Windows
   - `Desktop.ini` - Windows

6. **Files nhạy cảm**:
   - `*.pem`, `*.key`, `*.crt` - Certificate files
   - `*.sql` - Database dumps

### 📂 Ảnh trong /storage/app/public/photos/

**Lưu ý**: Mặc định ảnh trong `storage/app/public/photos/` sẽ được commit lên Git.

Nếu bạn **KHÔNG MUỐN** commit ảnh lên Git (vì file ảnh thường nặng), hãy uncomment dòng này trong `.gitignore`:

```gitignore
# Uncomment dòng dưới để ignore ảnh
/storage/app/public/photos/*
!/storage/app/public/photos/.gitkeep
```

### 🚀 Các bước tiếp theo:

1. **Khởi tạo Git** (nếu chưa có):
   ```bash
   git init
   ```

2. **Kiểm tra file nào sẽ được commit**:
   ```bash
   git status
   ```

3. **Add các file**:
   ```bash
   git add .
   ```

4. **Commit lần đầu**:
   ```bash
   git commit -m "Initial commit - Laravel Ecommerce Project"
   ```

5. **Kết nối với remote repository** (GitHub/GitLab):
   ```bash
   git remote add origin <repository-url>
   git push -u origin main
   ```

### ⚠️ LƯU Ý QUAN TRỌNG:

1. **File .env**: KHÔNG BAO GIỜ commit file này lên Git! Nó chứa:
   - Database password
   - API keys
   - APP_KEY
   - Các thông tin nhạy cảm khác

2. **Thay vào đó**: Commit file `.env.example` để đồng nghiệp biết cần config gì

3. **Vendor folder**: Không commit thư mục này vì:
   - Rất nặng (hàng trăm MB)
   - Có thể cài lại bằng `composer install`

4. **Node_modules**: Tương tự, dùng `npm install` để cài lại

### 📋 Checklist trước khi push lên Git:

- [ ] File `.env` không trong danh sách git status
- [ ] Thư mục `vendor/` không trong danh sách
- [ ] Thư mục `node_modules/` không trong danh sách
- [ ] File `.gitignore` đã được add
- [ ] File `.env.example` đã được add (để người khác biết config)

### 🔄 Nếu đã commit nhầm file nhạy cảm:

```bash
# Xóa file khỏi Git nhưng giữ lại trên local
git rm --cached .env
git rm --cached -r vendor/
git rm --cached -r node_modules/

# Commit lại
git commit -m "Remove sensitive files from Git"
git push
```

### 📦 Clone project về máy mới:

```bash
# 1. Clone repo
git clone <repository-url>
cd <project-folder>

# 2. Copy .env.example thành .env
cp .env.example .env

# 3. Cài dependencies
composer install
npm install

# 4. Generate APP_KEY
php artisan key:generate

# 5. Chạy migrations
php artisan migrate --seed

# 6. Link storage
php artisan storage:link

# 7. Start server
php artisan serve
```

---

**Created by: AI Assistant**  
**Date: 2026-01-10**
