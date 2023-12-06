<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'title' => 'title3', 
            'body' => 'body3', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title4', 
            'body' => 'body4', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title5', 
            'body' => 'body5', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title6', 
            'body' => 'body6', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title7', 
            'body' => 'body7', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title8', 
            'body' => 'body8', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title9', 
            'body' => 'body9', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title10', 
            'body' => 'body10', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title11', 
            'body' => 'body11', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title12', 
            'body' => 'body12', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
        
        DB::table('reviews')->insert([
            'title' => 'title13', 
            'body' => 'body13', 
            'created_at' => new DateTime(), 
            'updated_at' => new DateTime(), 
        ]);
    }
}
