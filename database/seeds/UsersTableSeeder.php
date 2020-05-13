<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Samuel Mercado',
            'email' => 'samuel.mercado@academicos.udg.mx',
            'password' => Hash::make('password'),
        ]);
    }
}
