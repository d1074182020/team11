<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name'=>'Sean',
            'home'=>'Taoyuang',
            'phone'=>90990,
            'ceo'=>'John'
        ]);
        DB::table('brands')->insert([
            'name'=>'John',
            'home'=>'Taoyuang',
            'phone'=>990,
            'ceo'=>'ABC'
        ]);
        DB::table('brands')->insert([
            'name'=>'Mary',
            'home'=>'Taoyuang',
            'phone'=>900,
            'ceo'=>'Alex'
        ]);
    }
}
