<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobility_History extends Model
{
    protected $guarded = ['id', 'date_mobility', 'id_asset', 'id_location', 'id_status'];

    use HasFactory;

    //Relation to Asset, one to many
    function asset()
    {
        return $this->belongsTo(Asset::class);
    }
    //Relation to Location, one to many
    function location()
    {
        return $this->belongsTo(Location::class);
    }
    //Relation to Status, one to many
    function status()
    {
        return $this->belongsTo(Status::class);
    }

}
