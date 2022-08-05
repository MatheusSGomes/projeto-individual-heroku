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
            'name' => 'Mariana Borges',
            'phone' => '61 4687-9875',
            'email' => 'Mariana@email.com',
            'photo' => 'https://images.unsplash.com/photo-1621191777563-2b084fa0ae01?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG11bGhlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Stefania Santo',
            'phone' => '61 6545-3524',
            'email' => 'stefania@email.com',
            'photo' => 'https://images.unsplash.com/photo-1616723543486-c757b38362c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fG11bGhlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Aline Mineiro',
            'phone' => '61 6545-3524',
            'email' => 'aline@email.com',
            'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29tYW4lMjBmYWNlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Estevão Lameirinhas',
            'phone' => '61 6545-3524',
            'email' => 'estevao@email.com',
            'photo' => 'https://images.unsplash.com/photo-1608681299041-cc19878f79f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fG1hbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Inácio Fontoura',
            'phone' => '61 6545-3524',
            'email' => 'inacio@email.com',
            'photo' => 'https://images.unsplash.com/photo-1618077360395-f3068be8e001?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fG1hbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Fabrício Lucena',
            'phone' => '61 6545-3524',
            'email' => 'fabricio@email.com',
            'photo' => 'https://images.unsplash.com/photo-1585670210693-e7fdd16b142e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fG1hbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Humberto Castro',
            'phone' => '61 6545-3524',
            'email' => 'humberto@email.com',
            'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fG1hbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Jessica Vale',
            'phone' => '61 6545-3524',
            'email' => 'jessica@email.com',
            'photo' => 'https://images.unsplash.com/photo-1552954277-1b53c032223d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fG11bGhlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Diego Palmeira',
            'phone' => '61 6545-3524',
            'email' => 'diego@email.com',
            'photo' => 'https://images.unsplash.com/photo-1624395213043-fa2e123b2656?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fG1hbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Tânia Ventura',
            'phone' => '61 6545-3524',
            'email' => 'tania@email.com',
            'photo' => 'https://images.unsplash.com/photo-1618601444833-3a1706ae3b52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fG11bGhlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Alice Canela',
            'phone' => '61 6545-3524',
            'email' => 'alice@email.com',
            'photo' => 'https://images.unsplash.com/photo-1618085221129-cb9f9ac1e651?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bXVsaGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Délcio Fraga',
            'phone' => '61 6545-3524',
            'email' => 'delcio@email.com',
            'photo' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bWFuJTIwZmFjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Melinda Pessoa',
            'phone' => '61 6545-3524',
            'email' => 'melinda@email.com',
            'photo' => 'https://images.unsplash.com/photo-1600273759837-a4d4abb62142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bXVsaGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Paulo Monte',
            'phone' => '61 6545-3524',
            'email' => 'paulo@email.com',
            'photo' => 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bWFuJTIwZmFjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Michelle Aquino',
            'phone' => '61 6545-3524',
            'email' => 'michelle@email.com',
            'photo' => 'https://images.unsplash.com/photo-1616723355545-95f2f2abb4d4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bXVsaGVyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
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
            'name' => 'Andrei Pinhal',
            'phone' => '61 6545-3524',
            'email' => 'andrei@email.com',
            'photo' => 'https://images.unsplash.com/photo-1591084728795-1149f32d9866?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bWFuJTIwZmFjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('senha123')
        ]);

        DB::table('users')->insert([
            'name' => 'Zoe Póvoas',
            'phone' => '61 6545-3524',
            'email' => 'zoe@email.com',
            'photo' => 'https://images.unsplash.com/photo-1603469278809-b2139cf2958d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTJ8fG11bGhlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('senha123')
        ]);

        DB::table('users')->insert([
            'name' => 'Oliver Marcondes',
            'phone' => '61 6545-3524',
            'email' => 'oliver@email.com',
            'photo' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuJTIwZmFjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Felix Salvado',
            'phone' => '61 6545-3524',
            'email' => 'felix@email.com',
            'photo' => 'https://images.unsplash.com/photo-1611485988300-b7530defb8e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFuJTIwZmFjZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'is_admin' => '0',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Matheus',
            'phone' => '61 99240-4578',
            'email' => 'matheus@email.com',
            'photo' => '',
            'is_admin' => '1',
            'password' => bcrypt('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'phone' => '61 4658-1235',
            'email' => 'admin@email.com',
            'photo' => '',
            'is_admin' => '1',
            'password' => bcrypt('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Matheus',
            'phone' => '61 99240-4578',
            'email' => 'math.s.gomes@gmail.com',
            'photo' => '',
            'is_admin' => '1',
            'password' => bcrypt('12345678'),
        ]);
    }
}
