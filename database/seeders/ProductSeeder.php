<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'iPhone 13',
            'description' => '128gb de memória',
            'price' => '2512',
            'image' => null,
            'user_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Mesa de apoio',
            'description' => 'Cores white/feijó',
            'price' => '748',
            'image' => null,
            'user_id' => 2,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Playstation 5',
            'description' => 'Preto e branco com 1tb de SSD',
            'price' => '1589',
            'image' => null,
            'user_id' => 3,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
