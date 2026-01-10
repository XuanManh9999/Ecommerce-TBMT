<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_categories')->insert([
            [
                'title' => 'Laptop',
                'slug' => 'laptop',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Phụ kiện laptop',
                'slug' => 'phu-kien-laptop',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tin tức công nghệ',
                'slug' => 'tin-tuc-cong-nghe',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Đánh giá sản phẩm',
                'slug' => 'danh-gia-san-pham',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
