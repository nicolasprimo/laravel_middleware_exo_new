<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
            [               
                "name" => "Admin",
                "email" => "admin@email.com",
                "password" => Hash::make('admin@email.com'),
                "role_id" => "1"
            ],
            [
                "name" => "Webmaster",
                "email" => "webmaster@email.com",
                "password" => Hash::make('webmaster@email.com'),
                "role_id" => "2"
            ],
            [
                "name" => "Membre",
                "email" => "membre@email.com",
                "password" => Hash::make('membre@email.com'),
                "role_id" => "3"
            ]
        ]);
    }
}
