<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'João',
            'phone' => '61 7894-3524',
            'email' => 'joao@email.com',
            'is_admin' => '0',
            'password' => 'senha123'
        ]);

        DB::table('users')->insert([
            'name' => 'Maria',
            'phone' => '61 8974-5878',
            'email' => 'maria@email.com',
            'is_admin' => '0',
            'password' => 'senha123'
        ]);

        DB::table('users')->insert([
            'name' => 'José',
            'phone' => '61 9847-6547',
            'email' => 'jose@email.com',
            'is_admin' => '0',
            'password' => 'senha123'
        ]);
    }
}
