<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EixoSeeder extends Seeder {
    public function run(): void {
        $data = [
            ["name" => "INFORMAÇÃO E COMUNICAÇÃO", "description" => "Descrição para INFORMAÇÃO E COMUNICAÇÃO"],
            ["name" => "RECURSOS NATURAIS", "description" => "Descrição para RECURSOS NATURAIS"],
            ["name" => "CIÊNCIAS HUMANAS", "description" => "Descrição para CIÊNCIAS HUMANAS"],
            ["name" => "FÍSICA", "description" => "Descrição para FÍSICA"],
            ["name" => "MECÂNICA", "description" => "Descrição para MECÂNICA"],
            ["name" => "LINGUAGENS", "description" => "Descrição para LINGUAGENS"],
        ];
        DB::table('eixos')->insert($data);
    }
}