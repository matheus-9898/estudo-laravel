<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::factory(20)->create();

        Cliente::factory()->create([
            'nome' => 'Test User',
            'email' => 'test@example.com',
            'telefone' => '32999999999',
            'empresa' => 'xyz ltda',
            'tel_comercial' => '32999999999',

        ]);
    }
}
