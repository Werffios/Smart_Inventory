<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Asset extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Asset, one to many
    function assets()
    {
        return $this->hasMany(Asset::class);
    }
    //Relation to Brand, one to many
    function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
