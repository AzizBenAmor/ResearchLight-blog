<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->delete();
        $settings = array(
            array('id' => '1','key' => 'site.title','display_name' => 'Site Title','value' => 'Site Title','details' => '','type' => 'text','order' => '1','group' => 'Site'),
            array('id' => '2','key' => 'site.description','display_name' => 'Site Description','value' => 'Site Description','details' => '','type' => 'text','order' => '2','group' => 'Site'),
            array('id' => '3','key' => 'site.logo','display_name' => 'Site Logo','value' => '','details' => '','type' => 'image','order' => '3','group' => 'Site'),
            array('id' => '4','key' => 'site.google_analytics_tracking_id','display_name' => 'Google Analytics Tracking ID','value' => '','details' => '','type' => 'text','order' => '4','group' => 'Site'),
            array('id' => '5','key' => 'admin.bg_image','display_name' => 'Admin Background Image','value' => '','details' => '','type' => 'image','order' => '5','group' => 'Admin'),
            array('id' => '6','key' => 'admin.title','display_name' => 'Admin Title','value' => 'Voyager','details' => '','type' => 'text','order' => '1','group' => 'Admin'),
            array('id' => '7','key' => 'admin.description','display_name' => 'Admin Description','value' => 'Welcome to Voyager. The Missing Admin for Laravel','details' => '','type' => 'text','order' => '2','group' => 'Admin'),
            array('id' => '8','key' => 'admin.loader','display_name' => 'Admin Loader','value' => '','details' => '','type' => 'image','order' => '3','group' => 'Admin'),
            array('id' => '9','key' => 'admin.icon_image','display_name' => 'Admin Icon Image','value' => '','details' => '','type' => 'image','order' => '4','group' => 'Admin'),
            array('id' => '10','key' => 'admin.google_analytics_client_id','display_name' => 'Google Analytics Client ID (used for admin dashboard)','value' => '','details' => '','type' => 'text','order' => '1','group' => 'Admin')
          );
        DB::table('settings')->insert($settings);
    }
}
