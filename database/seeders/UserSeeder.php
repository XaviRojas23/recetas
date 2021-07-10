<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Streya',
            'email'=>'streya@gmail.com',
            'password'=>Hash::make('12345678'),
            'URL'=>'http://youtube.es',
        ]);

        $user->perfil()->create();

        $user = User::create([
            'name'=>'Xavi',
            'email'=>'xavi@gmail.com',
            'password'=>Hash::make('12345678'),
            'URL'=>'http://youtube.es',
        ]);

        $user->perfil()->create();
    }
}
