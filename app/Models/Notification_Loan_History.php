<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_Loan_History extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    //Relation to Loan, one to many
    function loan()
    {
        return $this->belongsTo(Loan::class);
    }
    //Relation to Status, one to many
    function status()
    {
        return $this->belongsTo(Status::class);
    }
}
