<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $guarded = ['id', 'placa', 'department_id', 'location_id'];

    use HasFactory;

    //Relation to Category, one to many
    function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Relation to Department, one to many
    function department()
    {
        return $this->belongsTo(Department::class);
    }
    //Relation to Location, one to many
    function location()
    {
        return $this->belongsTo(Location::class);
    }
    //Relation to Model, one to many
    function modelasset()
    {
        return $this->belongsTo(ModelAsset::class);
    }
    //Relation to Status, one to many
    function status()
    {
        return $this->belongsTo(Status::class);
    }
    //Relation to Assigment_History, one to many
    function assigment_history()
    {
        return $this->hasMany(Assigment_History::class);
    }
    //Relation to Loan, one to many
    function loan()
    {
        return $this->hasMany(Loan::class);
    }
    //Relation to Maintenance_History, one to many
    function maintenance_history()
    {
        return $this->hasMany(Maintenance_History::class);
    }
    //Relation to Mobility_History, one to many
    function mobility_history()
    {
        return $this->hasMany(Mobility_History::class);
    }
    //Relation to Responsible, one to one
    function responsible()
    {
        return $this->hasOne(Responsible::class);
    }
}
