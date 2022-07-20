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
            'image' => 'https://conteudo.imguol.com.br/c/noticias/2d/2022/03/24/pessoa-segura-iphone-13-pro-na-cor-verde-durante-inicio-das-vendas-do-telefone-nos-estados-unidos-1648135368358_v2_900x506.jpg',
            'user_id' => 1,
            'category_id' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Mesa de apoio',
            'description' => 'Cores white/feijó',
            'price' => '748',
            'image' => 'https://cdn.pocket-lint.com/r/s/970x/assets/images/158444-phones-review-apple-iphone-13-review-images-image1-clh15n2ocg.jpg',
            'user_id' => 2,
            'category_id' => 2
        ]);

        DB::table('products')->insert([
            'name' => 'Playstation 5',
            'description' => 'Preto e branco com 1tb de SSD',
            'price' => '1589',
            'image' => 'https://cdn.pocket-lint.com/r/s/970x/assets/images/154419-games-review-hands-on-playstation-5-hands-on-pics-image1-tbq3hzlrkw.jpg',
            'user_id' => 3,
            'category_id' => 3
        ]);
    }
}
