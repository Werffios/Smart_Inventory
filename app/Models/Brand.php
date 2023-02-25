<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to ModelAsset, one to many
    function model_assets()
    {
        return $this->hasMany(Model_Asset::class);
    }
}
