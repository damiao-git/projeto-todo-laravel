<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(["name" => "Damiao","email"=> "damiao@gmail.com","password"=> bcrypt("123456"), "type_users_id" => 1]);
        User::create(["name" => "Allyne","email"=> "allyne@gmail.com","password"=> bcrypt("123456"), "type_users_id" => 2]);
        User::create(["name" => "Mateus","email"=> "mateus@gmail.com","password"=> bcrypt("123456"), "type_users_id" => 1]);
    }
}
