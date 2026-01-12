<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User Demo',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('user123'),
                'role'=>'user',
                'status'=>'active'
            ),
            array(
                'name'=>'Nguyễn Văn A',
                'email'=>'nguyenvana@gmail.com',
                'password'=>Hash::make('password123'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
