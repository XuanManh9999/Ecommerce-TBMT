<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Laptop sinh viên',
                'slug' => 'laptop-danh-cho-sinh-vien',
                'summary' => '<p>Laptop dành cho sinh viên</p>',
                'photo' => '/storage/photos/1/Loại sản phẩm/laptop2.png',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PC',
                'slug' => 'pc',
                'summary' => '<p>PC</p>',
                'photo' => '/storage/photos/1/Loại sản phẩm/pc.png',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Phụ kiện',
                'slug' => 'phu-kien',
                'summary' => '<p>Phụ kiện</p>',
                'photo' => '/storage/photos/1/Loại sản phẩm/phukien.png',
                'is_parent' => 1,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ipad',
                'slug' => 'ipad',
                'summary' => '<p>Ipad</p>',
                'photo' => '/storage/photos/1/thumbs/Screenshot_11.png',
                'is_parent' => 0,
                'parent_id' => null,
                'added_by' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
