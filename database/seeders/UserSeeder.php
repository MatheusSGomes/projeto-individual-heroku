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
            'name' => 'Matheus',
            'phone' => '61 99240-4572',
            'email' => 'matheus@email.com',
            'is_admin' => '1',
            'password' => bcrypt('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'admin',
            'phone' => '61 4658-1235',
            'email' => 'admin@email.com',
            'is_admin' => '1',
            'password' => bcrypt('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'user',
            'phone' => '61 6545-3524',
            'email' => 'user@email.com',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'João',
            'phone' => '61 7894-3524',
            'email' => 'joao@email.com',
            'is_admin' => '0',
            'password' => bcrypt('senha123')
        ]);

        DB::table('users')->insert([
            'name' => 'Maria',
            'phone' => '61 8974-5878',
            'email' => 'maria@email.com',
            'is_admin' => '0',
            'password' => bcrypt('senha123')
        ]);

        DB::table('users')->insert([
            'name' => 'José',
            'phone' => '61 9847-6547',
            'email' => 'jose@email.com',
            'is_admin' => '0',
            'password' => bcrypt('senha123')
        ]);
    }
}
