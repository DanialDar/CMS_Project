<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SuperAgent extends Model
{
    protected $table = "super_agents";
    protected $fillable = [
        'name', 'email', 'contact', 'designation'       
    ];
}
