<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Chào mừng bạn đến với cửa hàng Ecommerce TBMT. Chúng tôi cung cấp đa dạng sản phẩm chất lượng với giá cả cạnh tranh. Mua sắm ngay và tận hưởng giao hàng nhanh chóng!",
            'short_des'=>"Ecommerce TBMT - Nơi mua sắm trực tuyến uy tín, chất lượng cao",
            'photo'=>"/storage/photos/1/thumbs/logo-2024.png",
            'logo'=>'/storage/photos/1/thumbs/logo-2024.png',
            'address'=>"123 Đường Kinh Doanh, Thành phố, Việt Nam",
            'email'=>"codeastro.com",
            'phone'=>"1234567777",
        );
        DB::table('settings')->insert($data);
    }
}
