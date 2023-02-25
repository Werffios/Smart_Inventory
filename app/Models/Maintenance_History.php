<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance_History extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Asset, one to many
    function asset()
    {
        return $this->belongsTo(Asset::class);
    }
    //Relation to Status, one to many
    function status()
    {
        return $this->belongsTo(Status::class);
    }
}
