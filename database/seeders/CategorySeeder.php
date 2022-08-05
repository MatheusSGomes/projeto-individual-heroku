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
            'name' => 'Celulares'
        ]);

        DB::table('categories')->insert([
            'name' => 'Móveis'
        ]);

        DB::table('categories')->insert([
            'name' => 'Videogames'
        ]);
    }
}
