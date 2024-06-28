<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create(['name' => 'Lavar o carro','status_id'=> '1','user_id'=> '1']);
        Todo::create(['name' => 'Cortar o cabelo','status_id'=> '2','user_id'=> '2']);
        Todo::create(['name' => 'Fazer compras','status_id'=> '3','user_id'=> '3']);
        Todo::create(['name' => 'Fazer exercicios','status_id'=> '1','user_id'=> '1']);
    }
}
