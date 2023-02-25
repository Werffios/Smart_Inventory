<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use Nette\Utils\Type;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Computador'
        ]);
        Category::create([
            'name' => 'Celular'
        ]);
        Category::create([
            'name' => 'Tablet'
        ]);
        Category::create([
            'name' => 'Consola'
        ]);
        Category::create([
            'name' => 'Accesorio'
        ]);
        Category::create([
            'name' => 'Laptop'
        ]);
        Category::create([
            'name' => 'Router'
        ]);

    }
}
