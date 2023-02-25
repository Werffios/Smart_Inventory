<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Nicolas',
            'last_name' => 'Suarez',
            'document' => '123456789'
        ]);
        Person::factory(20)->create();
    }
}
