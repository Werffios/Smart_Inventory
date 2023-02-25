<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Asset, one to many
    function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
