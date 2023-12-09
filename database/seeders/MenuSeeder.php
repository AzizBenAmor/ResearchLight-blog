<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->delete();
        $menus = array(
            array('id' => '1','name' => 'admin','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02')
          );
          
        DB::table('menus')->insert($menus);
    }
}
