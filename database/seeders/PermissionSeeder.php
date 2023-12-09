<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->delete();
        $permissions = array(
            array('id' => '1','key' => 'browse_admin','table_name' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '2','key' => 'browse_bread','table_name' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '3','key' => 'browse_database','table_name' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '4','key' => 'browse_media','table_name' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '5','key' => 'browse_compass','table_name' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '6','key' => 'browse_menus','table_name' => 'menus','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '7','key' => 'read_menus','table_name' => 'menus','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '8','key' => 'edit_menus','table_name' => 'menus','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '9','key' => 'add_menus','table_name' => 'menus','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '10','key' => 'delete_menus','table_name' => 'menus','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '11','key' => 'browse_roles','table_name' => 'roles','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '12','key' => 'read_roles','table_name' => 'roles','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '13','key' => 'edit_roles','table_name' => 'roles','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '14','key' => 'add_roles','table_name' => 'roles','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '15','key' => 'delete_roles','table_name' => 'roles','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '16','key' => 'browse_users','table_name' => 'users','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '17','key' => 'read_users','table_name' => 'users','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '18','key' => 'edit_users','table_name' => 'users','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '19','key' => 'add_users','table_name' => 'users','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '20','key' => 'delete_users','table_name' => 'users','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '21','key' => 'browse_settings','table_name' => 'settings','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '22','key' => 'read_settings','table_name' => 'settings','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '23','key' => 'edit_settings','table_name' => 'settings','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '24','key' => 'add_settings','table_name' => 'settings','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '25','key' => 'delete_settings','table_name' => 'settings','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '26','key' => 'browse_articles','table_name' => 'articles','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49'),
            array('id' => '27','key' => 'read_articles','table_name' => 'articles','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49'),
            array('id' => '28','key' => 'edit_articles','table_name' => 'articles','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49'),
            array('id' => '29','key' => 'add_articles','table_name' => 'articles','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49'),
            array('id' => '30','key' => 'delete_articles','table_name' => 'articles','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49'),
            array('id' => '31','key' => 'browse_tags','table_name' => 'tags','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '32','key' => 'read_tags','table_name' => 'tags','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '33','key' => 'edit_tags','table_name' => 'tags','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '34','key' => 'add_tags','table_name' => 'tags','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '35','key' => 'delete_tags','table_name' => 'tags','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '36','key' => 'browse_new_letters','table_name' => 'new_letters','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00'),
            array('id' => '37','key' => 'read_new_letters','table_name' => 'new_letters','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00'),
            array('id' => '38','key' => 'edit_new_letters','table_name' => 'new_letters','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00'),
            array('id' => '39','key' => 'add_new_letters','table_name' => 'new_letters','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00'),
            array('id' => '40','key' => 'delete_new_letters','table_name' => 'new_letters','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00')
          );
          
          
        DB::table('permissions')->insert($permissions);
    }
}
