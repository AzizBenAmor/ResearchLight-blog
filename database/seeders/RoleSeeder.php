<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();
        $roles = array(
            array('id' => '1','name' => 'admin','display_name' => 'Administrator','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '2','name' => 'user','display_name' => 'Normal User','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02')
          );
        DB::table('roles')->insert($roles);
    }
}
