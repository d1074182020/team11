<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return string
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomname() {
        $f_name = $this->generateRandomString(rand(2, 15));
        $f_name = strtolower($f_name);
        $f_name = ucfirst($f_name);
        $name = $f_name;
        return $name;
    }
    public function generateRandomclass()
    {
        $class = ['鍵盤', '滑鼠', '耳機', '螢幕', '麥克風', '網路攝影機'];
        return $class[rand(0, count($class)-1)];
    }
    public function run()
    {
        for($i=0;$i<500;$i++)
        {
            $name = $this->generateRandomname();
            $class = $this->generateRandomclass();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            DB::table('Products')->insert([
              'name' => $name,
              'id'=> rand(1,55),
              'brand_id' => rand(1,4),
              'class' => $class,
              'price' =>rand(1,50000),
              'line' => rand(1,2),
              'created_at' => $random_datetime,
              'updated_at' => $random_datetime
        ]);
        }
    }
}
