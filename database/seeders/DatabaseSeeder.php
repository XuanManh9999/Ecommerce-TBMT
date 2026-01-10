<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Chạy các seeders theo thứ tự phụ thuộc
        $this->call([
            // 1. User phải tạo trước (vì các bảng khác có thể tham chiếu đến user)
            UserSeeder::class,
            
            // 2. Settings
            SettingsSeeder::class,
            
            // 3. Brands (độc lập)
            BrandSeeder::class,
            
            // 4. Categories (độc lập)
            CategorySeeder::class,
            
            // 5. Products (phụ thuộc vào Categories và Brands)
            ProductSeeder::class,
            
            // 6. Shippings (độc lập)
            ShippingSeeder::class,
            
            // 7. Banners (độc lập)
            BannerSeeder::class,
            
            // 8. Post Categories và Tags (độc lập)
            PostCategorySeeder::class,
            PostTagSeeder::class,
            
            // 9. Posts (phụ thuộc vào PostCategory và User)
            PostSeeder::class,
        ]);

        $this->command->info('✅ Database seeded successfully!');
        $this->command->info('📧 Admin login: admin@gmail.com / admin123');
        $this->command->info('📧 User login: user@gmail.com / user123');
    }
}
