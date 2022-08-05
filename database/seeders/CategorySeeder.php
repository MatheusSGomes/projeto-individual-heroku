<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Imóveis',
            'image' => 'https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        ]);

        DB::table('categories')->insert([
            'name' => 'Automóveis',
            'image' => 'https://images.unsplash.com/photo-1565043666747-69f6646db940?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80',
        ]);

        DB::table('categories')->insert([
            'name' => 'Celulares',
            'image' => 'https://images.unsplash.com/photo-1605170439002-90845e8c0137?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8cGhvbmVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
        ]);

        DB::table('categories')->insert([
            'name' => 'Esportes',
            'image' => 'https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        ]);

        DB::table('categories')->insert([
            'name' => 'Videogames',
            'image' => 'https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        ]);

        DB::table('categories')->insert([
            'name' => 'Móveis',
            'image' => 'https://images.unsplash.com/photo-1554995207-c18c203602cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG91c2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
        ]);
    }
}
