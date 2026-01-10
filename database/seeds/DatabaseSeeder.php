<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(SettingTableSeeder::class);
         $this->call(BrandTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(ProductTableSeeder::class);
         $this->call(BannerTableSeeder::class);
         $this->call(PostCategoryTableSeeder::class);
         $this->call(CouponSeeder::class);
    }
}
