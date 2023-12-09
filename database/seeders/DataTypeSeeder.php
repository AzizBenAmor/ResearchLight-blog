<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_types')->delete();
        $data_types = array(
            array('id' => '1','name' => 'users','slug' => 'users','display_name_singular' => 'User','display_name_plural' => 'Users','icon' => 'voyager-person','model_name' => 'TCG\\Voyager\\Models\\User','policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy','controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','description' => NULL,'generate_permissions' => '1','server_side' => '0','details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-09 11:10:45'),
            array('id' => '2','name' => 'menus','slug' => 'menus','display_name_singular' => 'Menu','display_name_plural' => 'Menus','icon' => 'voyager-list','model_name' => 'TCG\\Voyager\\Models\\Menu','policy_name' => NULL,'controller' => '','description' => '','generate_permissions' => '1','server_side' => '0','details' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '3','name' => 'roles','slug' => 'roles','display_name_singular' => 'Role','display_name_plural' => 'Roles','icon' => 'voyager-lock','model_name' => 'TCG\\Voyager\\Models\\Role','policy_name' => NULL,'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','description' => '','generate_permissions' => '1','server_side' => '0','details' => NULL,'created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02'),
            array('id' => '4','name' => 'articles','slug' => 'articles','display_name_singular' => 'Article','display_name_plural' => 'Articles','icon' => 'voyager-news','model_name' => 'App\\Models\\Article','policy_name' => NULL,'controller' => NULL,'description' => NULL,'generate_permissions' => '1','server_side' => '1','details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:34:02'),
            array('id' => '5','name' => 'tags','slug' => 'tags','display_name_singular' => 'Tag','display_name_plural' => 'Tags','icon' => 'voyager-tag','model_name' => 'App\\Models\\Tag','policy_name' => NULL,'controller' => NULL,'description' => NULL,'generate_permissions' => '1','server_side' => '1','details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07'),
            array('id' => '6','name' => 'new_letters','slug' => 'new-letters','display_name_singular' => 'New Letter','display_name_plural' => 'New Letters','icon' => 'voyager-mail','model_name' => 'App\\Models\\NewLetter','policy_name' => NULL,'controller' => NULL,'description' => NULL,'generate_permissions' => '1','server_side' => '1','details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00')
          );
        DB::table('data_types')->insert($data_types);
    }
}
