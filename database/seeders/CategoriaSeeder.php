<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriaSeeder extends Seeder {
    public function run(): void {
        $data = [
            [
                "name" => "Aventura", 
                "descricao" => "jogos de aventura",
            ],
            [
                "name" => "Ação",
                "descricao" => "jogos de ação",
            ],
        ];
        DB::table('categorias')->insert($data);
    }
}