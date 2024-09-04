<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    
    public function run(): void {
        
        $data = [
            [
                // PROFESSOR
                "name" => "GIL EDUARDO", 
                "email" => "gil@gmail.com", 
                "password" => Hash::make('gil123'), 
                "role_id" => 1,
            ],
            [   
                // ALUNO
                "name" => "DOUGLAS ROQUE MACHADO",
                "email" => "douglas@gmail.com", 
                "password" => Hash::make('douglas123'), 
                "role_id" => 2,
            ],
        ];
        DB::table('users')->insert($data);
    }
}