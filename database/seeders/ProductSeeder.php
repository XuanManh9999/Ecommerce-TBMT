<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Lấy category IDs
        $laptopCat = DB::table('categories')->where('slug', 'laptops')->first();
        $phoneCat = DB::table('categories')->where('slug', 'mobile-phones')->first();
        $mensCat = DB::table('categories')->where('slug', 'mens-clothing')->first();
        
        // Lấy brand (nếu có)
        $brandId = DB::table('brands')->first()->id ?? null;

        $products = [
            [
                'title' => 'Laptop Dell Inspiron 15',
                'slug' => 'laptop-dell-inspiron-15',
                'summary' => 'High performance laptop for work and entertainment',
                'description' => '<p>Dell Inspiron 15 with Intel Core i5, 8GB RAM, 512GB SSD. Perfect for productivity and multimedia.</p>',
                'photo' => '/storage/photos/1/thumbs/laptop1.png',
                'stock' => 50,
                'size' => 'M',
                'condition' => 'new',
                'status' => 'active',
                'price' => 15000000,
                'discount' => 10,
                'is_featured' => 1,
                'cat_id' => $laptopCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'iPhone 15 Pro Max',
                'slug' => 'iphone-15-pro-max',
                'summary' => 'Latest iPhone with amazing features',
                'description' => '<p>iPhone 15 Pro Max with A17 Pro chip, titanium design, 256GB storage. The most advanced iPhone ever.</p>',
                'photo' => '/storage/photos/1/thumbs/666.jpg',
                'stock' => 100,
                'size' => 'M',
                'condition' => 'new',
                'status' => 'active',
                'price' => 30000000,
                'discount' => 5,
                'is_featured' => 1,
                'cat_id' => $phoneCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Samsung Galaxy S24 Ultra',
                'slug' => 'samsung-galaxy-s24-ultra',
                'summary' => 'Flagship Android smartphone',
                'description' => '<p>Samsung Galaxy S24 Ultra with S Pen, 200MP camera, 12GB RAM, 512GB storage.</p>',
                'photo' => '/storage/photos/1/thumbs/mjns.jpg',
                'stock' => 75,
                'size' => 'M',
                'condition' => 'new',
                'status' => 'active',
                'price' => 25000000,
                'discount' => 8,
                'is_featured' => 1,
                'cat_id' => $phoneCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laptop HP Pavilion Gaming',
                'slug' => 'laptop-hp-pavilion-gaming',
                'summary' => 'Gaming laptop with powerful specs',
                'description' => '<p>HP Pavilion Gaming laptop with AMD Ryzen 7, 16GB RAM, RTX 3060, 1TB SSD. Perfect for gaming and content creation.</p>',
                'photo' => '/storage/photos/1/thumbs/laptop2.png',
                'stock' => 30,
                'size' => 'L',
                'condition' => 'new',
                'status' => 'active',
                'price' => 22000000,
                'discount' => 15,
                'is_featured' => 1,
                'cat_id' => $laptopCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Men\'s Casual T-Shirt',
                'slug' => 'mens-casual-tshirt',
                'summary' => 'Comfortable cotton t-shirt',
                'description' => '<p>100% cotton casual t-shirt. Available in multiple colors and sizes.</p>',
                'photo' => '/storage/photos/1/thumbs/phukien.png',
                'stock' => 200,
                'size' => 'S,M,L,XL',
                'condition' => 'new',
                'status' => 'active',
                'price' => 250000,
                'discount' => 20,
                'is_featured' => 0,
                'cat_id' => $mensCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'MacBook Pro 14 M3',
                'slug' => 'macbook-pro-14-m3',
                'summary' => 'Professional laptop for creators',
                'description' => '<p>MacBook Pro 14-inch with M3 chip, 16GB unified memory, 512GB SSD. ProMotion display.</p>',
                'photo' => '/storage/photos/1/thumbs/MacBook Pro 14.jpg',
                'stock' => 40,
                'size' => 'M',
                'condition' => 'new',
                'status' => 'active',
                'price' => 45000000,
                'discount' => 0,
                'is_featured' => 1,
                'cat_id' => $laptopCat->id ?? 1,
                'child_cat_id' => null,
                'brand_id' => $brandId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('products')->insert($products);
    }
}
