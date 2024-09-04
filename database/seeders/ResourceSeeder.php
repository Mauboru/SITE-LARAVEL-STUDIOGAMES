<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    public function run(): void {
        
        $data = [
            // MENU PROFESSOR       -----------------------------
            ["name" => "professor"],                        // 1
            ["name" => "professor.cadastrar"],              // 2
            // MENU ALUNO           -----------------------------
            ["name" => "aluno"],                            // 3
            ["name" => "aluno.solicitar"],                  // 4
            ["name" => "aluno.gerar"],                      // 5
        ];
        DB::table('resources')->insert($data);
    }
}