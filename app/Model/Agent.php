<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = "agents";
    protected $fillable = [
        'name', 'contact_number', 'lead_introducer_id', 'email'
    ];

    //
}
