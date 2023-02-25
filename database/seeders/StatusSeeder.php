<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::class::create([
            'name' => 'Bueno'
        ]);
        Status::class::create([
            'name' => 'Regular'
        ]);
        Status::class::create([
            'name' => 'Malo'
        ]);
        Status::class::create([
            'name' => 'En reparación'
        ]);
        Status::class::create([
            'name' => 'Fuera de servicio'
        ]);
    }
}
