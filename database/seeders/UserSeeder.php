<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' =>'Admin', 
            'level' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>  bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' =>'Pejabat', 
            'level' => 'Pejabat',
            'email' => 'pejabat@admin.com',
            'password' =>  bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' =>'Mahasiswa', 
            'level' => 'Mahasiswa',
            'email' => 'mahasiswa@admin.com',
            'password' =>  bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);
    }
}
