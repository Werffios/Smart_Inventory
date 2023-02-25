<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $guarded = ['id', 'id_person', 'id_asset'];

    use HasFactory;

    //Relation to Asset, one to many
    function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    //Relation to Person, one to many
    function person()
    {
        return $this->belongsTo(Person::class);
    }

    //Relation to Notification_Loan_History, one to many
    function notification_loan_history()
    {
        return $this->hasMany(Notification_Loan_History::class);
    }
}
