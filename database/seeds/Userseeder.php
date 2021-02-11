<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class Userseeder extends Seeder
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
            'name' => 'AdminEUMKM',
            'email' => 'admineumkm@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'domisili' => 'Yogyakarta',
        ]);
        User::create([
            'name' => 'Haryoadmin',
            'email' => 'haryoadmin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'domisili' => 'Yogyakarta',
        ]);
        User::create([
            'name' => 'rifkiadmin',
            'email' => 'rifkiadmin@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),
            'domisili' => 'Yogyakarta',
        ]);
    }
}
