<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        //  IMÓVEIS
        DB::table('products')->insert([
            'name' => 'Apartamento 302',
            'description' => 'Condominio Villas',
            'price' => '278000',
            'image' => 'https://images.unsplash.com/photo-1560448075-cbc16bb4af8e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 1,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apartamento 1200',
            'description' => 'Condomínio Salles',
            'price' => '358000',
            'image' => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 2,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Apt. 101',
            'description' => 'Condomínio Limeiras',
            'price' => '450000',
            'image' => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=780&q=80',
            'user_id' => 3,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Casa 11',
            'description' => 'Bairro Sabiá',
            'price' => '587800',
            'image' => 'https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 4,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // AUTOMÓVEIS
        DB::table('products')->insert([
            'name' => 'Fusca',
            'description' => 'Ano 1975',
            'price' => '78000',
            'image' => 'https://images.unsplash.com/photo-1584654448570-7ae442735516?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 5,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'VW Gol',
            'description' => 'Ano 1995',
            'price' => '34000',
            'image' => 'https://images.unsplash.com/photo-1602265074976-7e74b81dce2a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'user_id' => 6,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Audi A3',
            'description' => 'Ano 2005',
            'price' => '24000',
            'image' => 'https://images.unsplash.com/photo-1583438747784-a7c1ccfbfc98?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 7,
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // CELULARES
        DB::table('products')->insert([
            'name' => 'Iphone 12 mini',
            'description' => '128Gb de memória',
            'price' => '2560',
            'image' => 'https://images.unsplash.com/photo-1605546960121-24e957eb8c15?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=436&q=80',
            'user_id' => 8,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Galaxy s22',
            'description' => '256GB de memória',
            'price' => '3120',
            'image' => 'https://images.unsplash.com/photo-1644501618169-bab16b6e6efb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=432&q=80',
            'user_id' => 9,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Xiaomi Mi Note 10',
            'description' => '64Gb de Memória',
            'price' => '2124',
            'image' => 'https://images.unsplash.com/photo-1584904872169-ce55f469f6e9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80',
            'user_id' => 10,
            'category_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ESPORTE
        DB::table('products')->insert([
            'name' => 'Tênis de corrida',
            'description' => 'Novo na caixa',
            'price' => '256',
            'image' => 'https://images.unsplash.com/photo-1585944672394-4c58a015c1fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'user_id' => 11,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Raquetes de Tênis',
            'description' => 'Com bolinha',
            'price' => '145',
            'image' => 'https://images.unsplash.com/photo-1617883861744-13b534e3b928?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            'user_id' => 12,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Bola de basquete',
            'description' => 'Marca Spalding',
            'price' => '78',
            'image' => 'https://images.unsplash.com/photo-1519861531473-9200262188bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80',
            'user_id' => 13,
            'category_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // VIDEO GAMES
        DB::table('products')->insert([
            'name' => 'Xbox One',
            'description' => '1TB de SSD com jogos',
            'price' => '1540',
            'image' => 'https://images.unsplash.com/photo-1603985753826-30c036e8804d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80',
            'user_id' => 14,
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Playstation 4',
            'description' => '2TB de SSD',
            'price' => '2540',
            'image' => 'https://images.unsplash.com/photo-1507457379470-08b800bebc67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=909&q=80',
            'user_id' => 15,
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Teclado Gamer',
            'description' => '3 meses de uso',
            'price' => '125',
            'image' => 'https://images.unsplash.com/photo-1633315754878-b5a3b0ce64f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=876&q=80',
            'user_id' => 16,
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Nitendo Switch',
            'description' => '20 jogos inclusos',
            'price' => '125',
            'image' => 'https://images.unsplash.com/photo-1635514569156-ca58f1247e8d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'user_id' => 17,
            'category_id' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // MÓVEIS
        DB::table('products')->insert([
            'name' => 'Geladeira',
            'description' => '6 meses de uso',
            'price' => '1325',
            'image' => 'https://images.unsplash.com/photo-1571175443880-49e1d25b2bc5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'user_id' => 18,
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Mesa de escritório',
            'description' => 'Com cadeira inclusa',
            'price' => '375',
            'image' => 'https://images.unsplash.com/photo-1611269154421-4e27233ac5c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80',
            'user_id' => 19,
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('products')->insert([
            'name' => 'Cadeira de escritório',
            'description' => 'Ergonômica',
            'price' => '245',
            'image' => 'https://images.unsplash.com/photo-1505797149-43b0069ec26b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80',
            'user_id' => 20,
            'category_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
