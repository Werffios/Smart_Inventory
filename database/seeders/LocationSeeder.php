<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Laboratorio de Redes'
        ]);
        Location::create([
            'name' => 'Laboratorio de Computación'
        ]);
        Location::create([
            'name' => 'Laboratorio de Física'
        ]);
        Location::create([
            'name' => 'Laboratorio de Química'
        ]);
        Location::create([
            'name' => 'Salón de Música'
        ]);
        Location::create([
            'name' => 'Salón de Artes'
        ]);
        
    }
}
