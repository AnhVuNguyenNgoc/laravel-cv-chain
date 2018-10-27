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
        // $this->call(UsersTableSeeder::class);

         DB::table('users')->insert([
            'user_name' => 'DaiHocSaiGon',
            'email' => 'sgu@gmail.com',
            'password' => '1',
            'name'=>'Đại học Sài Gòn'
        ]);

        $today = Carbon\Carbon::now();


         DB::table('majors')->insert([
            'name' => 'Công nghệ thông tin',
            'created_at' => $today,
        ]);
         DB::table('majors')->insert([
            'name' => 'Thư viện văn phòng',
            'created_at' => $today,
        ]);


          DB::table('diplomas')->insert([
            'name' => 'Thư viện văn phòng',
            'gender' => $today,
            'rank' => 'Gioi',
            'from_year' => '2015',
            'to_year' => '2018',
            'qrcode' => 'https://www.google.com.vn/',
            'user_name' => 'DaiHocSaiGon',
            'major_id' => '1',
        ]);

}
