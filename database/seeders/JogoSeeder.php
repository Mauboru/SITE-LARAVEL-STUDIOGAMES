<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JogoSeeder extends Seeder {
    public function run(): void {
        $data = [
            [
                'nome' => 'Uncharted',
                'descricao' => 'é uma experiência cinematográfica de ação e aventura em que você pode revelar mistérios históricos enquanto viaja pelos mais variados e deslumbrantes ambientes renderizados',
                'categoria_id' => 1,
                'qtdHorasJogadas' => 10,
                'url' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
            [
                'nome' => 'Euro Truck Simulator 2',
                'descricao' => 'é um jogo de simulação de caminhões desenvolvido, e publicado pela SCS Software para Microsoft Windows, Linux e recentemente para OSX (Mac).',
                'categoria_id' => 3,
                'qtdHorasJogadas' => 120,
                'url' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null
            ],
        ];
        DB::table('jogos')->insert($data);
    }
}