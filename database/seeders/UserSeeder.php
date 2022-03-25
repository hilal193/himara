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
        DB::table("users")->insert([
            [
                "name" => "hilal",
                "email" => "hilal@test.com",
                "role_id" => 1,
                'profil' => 'images/users/employé_6.jpg',
                "password" => Hash::make("hilal"),
                "created_at" => now()
            ],
            [
                "name" => "hilal",
                "email" => "hilal1@test.com",
                "role_id" => 2,
                'profil' => 'images/users/admin.jpg',
                "password" => Hash::make("hilal"),
                "created_at" => now()
            ],
            [
                "name" => "hilal",
                "email" => "hilal2@test.com",
                "role_id" => 3,
                'profil' => 'images/users/admin.jpg',
                "password" => Hash::make("hilal"),
                "created_at" => now()
            ],
        ]);
    }
}
