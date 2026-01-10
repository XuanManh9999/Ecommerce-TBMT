<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Parent categories
        $electronicsId = DB::table('categories')->insertGetId([
            'title' => 'Electronics',
            'slug' => 'electronics',
            'summary' => 'All electronic products',
            'photo' => '/storage/photos/category/electronics.jpg',
            'is_parent' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $fashionId = DB::table('categories')->insertGetId([
            'title' => 'Fashion',
            'slug' => 'fashion',
            'summary' => 'Fashion and clothing items',
            'photo' => '/storage/photos/category/fashion.jpg',
            'is_parent' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $homeId = DB::table('categories')->insertGetId([
            'title' => 'Home & Garden',
            'slug' => 'home-garden',
            'summary' => 'Home and garden products',
            'photo' => '/storage/photos/category/home.jpg',
            'is_parent' => 1,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Child categories for Electronics
        DB::table('categories')->insert([
            [
                'title' => 'Laptops',
                'slug' => 'laptops',
                'summary' => 'Laptop computers',
                'photo' => '/storage/photos/category/laptops.jpg',
                'is_parent' => 0,
                'parent_id' => $electronicsId,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'summary' => 'Smartphones and mobile devices',
                'photo' => '/storage/photos/category/phones.jpg',
                'is_parent' => 0,
                'parent_id' => $electronicsId,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tablets',
                'slug' => 'tablets',
                'summary' => 'Tablet devices',
                'photo' => '/storage/photos/category/tablets.jpg',
                'is_parent' => 0,
                'parent_id' => $electronicsId,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Child categories for Fashion
        DB::table('categories')->insert([
            [
                'title' => 'Men\'s Clothing',
                'slug' => 'mens-clothing',
                'summary' => 'Clothing for men',
                'photo' => '/storage/photos/category/mens.jpg',
                'is_parent' => 0,
                'parent_id' => $fashionId,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Women\'s Clothing',
                'slug' => 'womens-clothing',
                'summary' => 'Clothing for women',
                'photo' => '/storage/photos/category/womens.jpg',
                'is_parent' => 0,
                'parent_id' => $fashionId,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
