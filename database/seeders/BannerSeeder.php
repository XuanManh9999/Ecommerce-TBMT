<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'title' => 'Welcome to Our Store',
                'slug' => 'welcome-to-our-store',
                'description' => 'Shop the latest products with amazing deals!',
                'photo' => '/storage/photos/1/thumbs/banner-1.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Year Sale 2026',
                'slug' => 'new-year-sale-2026',
                'description' => 'Up to 50% off on selected items',
                'photo' => '/storage/photos/1/thumbs/banner-2.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Electronics Mega Sale',
                'slug' => 'electronics-mega-sale',
                'description' => 'Get the best deals on laptops, phones and tablets',
                'photo' => '/storage/photos/1/thumbs/banner1.jpg',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
