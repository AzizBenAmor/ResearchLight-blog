<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_items')->delete();
        $menu_items = array(
            array('id' => '1','menu_id' => '1','title' => 'Dashboard','url' => '','target' => '_self','icon_class' => 'voyager-boat','color' => NULL,'parent_id' => NULL,'order' => '1','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.dashboard','parameters' => NULL),
            array('id' => '2','menu_id' => '1','title' => 'Media','url' => '','target' => '_self','icon_class' => 'voyager-images','color' => NULL,'parent_id' => NULL,'order' => '5','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.media.index','parameters' => NULL),
            array('id' => '3','menu_id' => '1','title' => 'Users','url' => '','target' => '_self','icon_class' => 'voyager-person','color' => NULL,'parent_id' => NULL,'order' => '3','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.users.index','parameters' => NULL),
            array('id' => '4','menu_id' => '1','title' => 'Roles','url' => '','target' => '_self','icon_class' => 'voyager-lock','color' => NULL,'parent_id' => NULL,'order' => '2','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.roles.index','parameters' => NULL),
            array('id' => '5','menu_id' => '1','title' => 'Tools','url' => '','target' => '_self','icon_class' => 'voyager-tools','color' => NULL,'parent_id' => NULL,'order' => '9','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => NULL,'parameters' => NULL),
            array('id' => '6','menu_id' => '1','title' => 'Menu Builder','url' => '','target' => '_self','icon_class' => 'voyager-list','color' => NULL,'parent_id' => '5','order' => '10','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.menus.index','parameters' => NULL),
            array('id' => '7','menu_id' => '1','title' => 'Database','url' => '','target' => '_self','icon_class' => 'voyager-data','color' => NULL,'parent_id' => '5','order' => '11','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.database.index','parameters' => NULL),
            array('id' => '8','menu_id' => '1','title' => 'Compass','url' => '','target' => '_self','icon_class' => 'voyager-compass','color' => NULL,'parent_id' => '5','order' => '12','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.compass.index','parameters' => NULL),
            array('id' => '9','menu_id' => '1','title' => 'BREAD','url' => '','target' => '_self','icon_class' => 'voyager-bread','color' => NULL,'parent_id' => '5','order' => '13','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.bread.index','parameters' => NULL),
            array('id' => '10','menu_id' => '1','title' => 'Settings','url' => '','target' => '_self','icon_class' => 'voyager-settings','color' => NULL,'parent_id' => NULL,'order' => '14','created_at' => '2023-12-08 19:26:02','updated_at' => '2023-12-08 19:26:02','route' => 'voyager.settings.index','parameters' => NULL),
            array('id' => '11','menu_id' => '1','title' => 'Articles','url' => '','target' => '_self','icon_class' => 'voyager-news','color' => NULL,'parent_id' => NULL,'order' => '15','created_at' => '2023-12-08 19:31:49','updated_at' => '2023-12-08 19:31:49','route' => 'voyager.articles.index','parameters' => NULL),
            array('id' => '12','menu_id' => '1','title' => 'Tags','url' => '','target' => '_self','icon_class' => 'voyager-tag','color' => NULL,'parent_id' => NULL,'order' => '16','created_at' => '2023-12-08 19:35:07','updated_at' => '2023-12-08 19:35:07','route' => 'voyager.tags.index','parameters' => NULL),
            array('id' => '13','menu_id' => '1','title' => 'New Letters','url' => '','target' => '_self','icon_class' => 'voyager-mail','color' => NULL,'parent_id' => NULL,'order' => '17','created_at' => '2023-12-08 19:36:00','updated_at' => '2023-12-08 19:36:00','route' => 'voyager.new-letters.index','parameters' => NULL)
          );
        DB::table('menu_items')->insert($menu_items);
    }
}
