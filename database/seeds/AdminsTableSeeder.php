<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $arr = [];
//        for ($i=0; $i<10; $i++) {
//            $tmp = [];
//            $tmp['username'] = str_random(20);
//            $tmp['password'] = Hash::make('123123');
//            $tmp['phone'] = '1'.rand(30,99).'0379'.rand(1000,9999);
//            $tmp['avatar'] = '/Uploads/20170611/149717775898939.png';
//
//            $arr[] = $tmp;
//        }
//        DB::table('admins')->insert($arr);
        factory(App\Http\Models\Admin::class, 90)->create();
    }
}
