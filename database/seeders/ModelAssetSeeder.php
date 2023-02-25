<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Model_Asset;
class ModelAssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model_Asset::create([
            'name' => 'BDV-E2100',
            'brand_id' => 2
        ]);
        Model_Asset::create([
            'name' => 'KDL-46W905A',
            'brand_id' => 2
        ]);
        Model_Asset::class::create([
            'name' => 'Cx001-la',
            'brand_id' => 4
        ]);
        Model_Asset::class::create([
            'name' => 'DAV-DZ556KB',
            'brand_id' => 2
        ]);
        Model_Asset::class::create([
            'name' => '42LS5700',
            'brand_id' => 8
        ]);
        Model_Asset::class::create([
            'name' => 'G50 80E501B2US',
            'brand_id' => 5
        ]);

    }
}
