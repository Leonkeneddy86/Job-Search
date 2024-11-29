<?php

namespace Database\Seeders;


use App\Models\Offer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     // User::factory(5)->create([
     //'name' => 'Test User',
     //'email' => 'test@example.com',
     // ]);

    
     Offer::factory(10)->create([
        'offer' => 'Almacen',
        'company' => 'Carrefour',
        'status' => 'abierto',
        'description' => '45 horas Semanales, estaras explotado psicologicamente',
        
    ]);
    }
}
