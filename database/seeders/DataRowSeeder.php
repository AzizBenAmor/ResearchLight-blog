<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataRowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_rows')->delete();
        $data_rows = array(
            array('id' => '1','data_type_id' => '1','field' => 'id','type' => 'number','display_name' => 'ID','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '1'),
            array('id' => '2','data_type_id' => '1','field' => 'name','type' => 'text','display_name' => 'Name','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|min:2|max:50"}}','order' => '2'),
            array('id' => '3','data_type_id' => '1','field' => 'email','type' => 'text','display_name' => 'Email','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|email"}}','order' => '3'),
            array('id' => '4','data_type_id' => '1','field' => 'password','type' => 'password','display_name' => 'Password','required' => '1','browse' => '0','read' => '0','edit' => '1','add' => '1','delete' => '0','details' => '{"validation":{"rule":"required|min:4|max:40"}}','order' => '4'),
            array('id' => '5','data_type_id' => '1','field' => 'remember_token','type' => 'text','display_name' => 'Remember Token','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '5'),
            array('id' => '6','data_type_id' => '1','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '1','read' => '1','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '6'),
            array('id' => '7','data_type_id' => '1','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '9'),
            array('id' => '8','data_type_id' => '1','field' => 'avatar','type' => 'image','display_name' => 'Avatar','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"image"}}','order' => '10'),
            array('id' => '9','data_type_id' => '1','field' => 'user_belongsto_role_relationship','type' => 'relationship','display_name' => 'Role','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '0','details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}','order' => '13'),
            array('id' => '10','data_type_id' => '1','field' => 'user_belongstomany_role_relationship','type' => 'relationship','display_name' => 'Roles','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '0','details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}','order' => '15'),
            array('id' => '11','data_type_id' => '1','field' => 'settings','type' => 'hidden','display_name' => 'Settings','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '16'),
            array('id' => '12','data_type_id' => '2','field' => 'id','type' => 'number','display_name' => 'ID','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '1'),
            array('id' => '13','data_type_id' => '2','field' => 'name','type' => 'text','display_name' => 'Name','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => NULL,'order' => '2'),
            array('id' => '14','data_type_id' => '2','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '3'),
            array('id' => '15','data_type_id' => '2','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '4'),
            array('id' => '16','data_type_id' => '3','field' => 'id','type' => 'number','display_name' => 'ID','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '1'),
            array('id' => '17','data_type_id' => '3','field' => 'name','type' => 'text','display_name' => 'Name','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => NULL,'order' => '2'),
            array('id' => '18','data_type_id' => '3','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '3'),
            array('id' => '19','data_type_id' => '3','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => NULL,'order' => '4'),
            array('id' => '20','data_type_id' => '3','field' => 'display_name','type' => 'text','display_name' => 'Display Name','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => NULL,'order' => '5'),
            array('id' => '21','data_type_id' => '1','field' => 'role_id','type' => 'text','display_name' => 'Role','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{}','order' => '12'),
            array('id' => '22','data_type_id' => '4','field' => 'id','type' => 'text','display_name' => 'Id','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '1'),
            array('id' => '23','data_type_id' => '4','field' => 'title','type' => 'text','display_name' => 'Title','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|max:255"}}','order' => '3'),
            array('id' => '24','data_type_id' => '4','field' => 'sub_title','type' => 'text','display_name' => 'Sub Title','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|max:255"}}','order' => '4'),
            array('id' => '25','data_type_id' => '4','field' => 'content','type' => 'rich_text_box','display_name' => 'Content','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required"}}','order' => '5'),
            array('id' => '26','data_type_id' => '4','field' => 'image','type' => 'image','display_name' => 'Image','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|image|mimes:jpg,png,jpeg"}}','order' => '6'),
            array('id' => '27','data_type_id' => '4','field' => 'user_id','type' => 'text','display_name' => 'User Id','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|max:255|exists:users,id"}}','order' => '2'),
            array('id' => '28','data_type_id' => '4','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '0','delete' => '1','details' => '{}','order' => '7'),
            array('id' => '29','data_type_id' => '4','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '8'),
            array('id' => '30','data_type_id' => '4','field' => 'article_belongsto_user_relationship','type' => 'relationship','display_name' => 'users','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"model":"App\\\\Models\\\\User","table":"users","type":"belongsTo","column":"user_id","key":"id","label":"name","pivot_table":"article_tag","pivot":"0","taggable":"0"}','order' => '9'),
            array('id' => '31','data_type_id' => '4','field' => 'article_belongstomany_tag_relationship','type' => 'relationship','display_name' => 'tags','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"model":"App\\\\Models\\\\Tag","table":"tags","type":"belongsToMany","column":"id","key":"id","label":"title","pivot_table":"article_tag","pivot":"1","taggable":"on"}','order' => '10'),
            array('id' => '32','data_type_id' => '5','field' => 'id','type' => 'text','display_name' => 'Id','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '1'),
            array('id' => '33','data_type_id' => '5','field' => 'title','type' => 'text','display_name' => 'Title','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required"}}','order' => '2'),
            array('id' => '34','data_type_id' => '5','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '0','delete' => '1','details' => '{}','order' => '3'),
            array('id' => '35','data_type_id' => '5','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '4'),
            array('id' => '36','data_type_id' => '6','field' => 'id','type' => 'text','display_name' => 'Id','required' => '1','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '1'),
            array('id' => '37','data_type_id' => '6','field' => 'email','type' => 'text','display_name' => 'Email','required' => '1','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"required|email"}}','order' => '2'),
            array('id' => '38','data_type_id' => '6','field' => 'created_at','type' => 'timestamp','display_name' => 'Created At','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '0','delete' => '1','details' => '{}','order' => '3'),
            array('id' => '39','data_type_id' => '6','field' => 'updated_at','type' => 'timestamp','display_name' => 'Updated At','required' => '0','browse' => '0','read' => '0','edit' => '0','add' => '0','delete' => '0','details' => '{}','order' => '4'),
            array('id' => '40','data_type_id' => '1','field' => 'email_verified_at','type' => 'timestamp','display_name' => 'Email Verified At','required' => '0','browse' => '0','read' => '0','edit' => '1','add' => '1','delete' => '1','details' => '{}','order' => '8'),
            array('id' => '41','data_type_id' => '1','field' => 'facebook','type' => 'text','display_name' => 'Facebook','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"url"}}','order' => '7'),
            array('id' => '42','data_type_id' => '1','field' => 'twitter','type' => 'text','display_name' => 'Twitter','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"url"}}','order' => '11'),
            array('id' => '43','data_type_id' => '1','field' => 'description','type' => 'text','display_name' => 'Description','required' => '0','browse' => '1','read' => '1','edit' => '1','add' => '1','delete' => '1','details' => '{"validation":{"rule":"string"}}','order' => '14')
          );
                    
        DB::table('data_rows')->insert($data_rows);
    }
}
