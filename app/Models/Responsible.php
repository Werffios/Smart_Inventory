<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    protected $guarded = ['id', 'start_date', 'end_date', 'asset_id', 'person_id'];

    use HasFactory;

    // Relation to Asset, one-to-one
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
    // Relation to Person, one-to-Many
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
