<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id', 'name', 'last_name', 'document' ];

    use HasFactory;

    // Relation to User, one-to-one inverse
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relation to Loan, one-to-Many
    public function loan()
    {
        return $this->hasMany(Loan::class);
    }
    // Relation to Responsible, one-to-Many
    public function responsible()
    {
        return $this->hasMany(Responsible::class);
    }
}


