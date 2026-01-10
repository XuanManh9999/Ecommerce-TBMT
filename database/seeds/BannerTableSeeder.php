<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerTableSeeder extends Seeder
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
                'title' => 'REDMI',
                'slug' => 'redmi',
                'photo' => '/storage/photos/1/banner-1.jpg',
                'description' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Banner 2',
                'slug' => 'banner-2',
                'photo' => '/storage/photos/1/banner-2.jpg',
                'description' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
