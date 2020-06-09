<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $table = "logs";
    protected $fillable = [
        'user_id', 'action', 'created_by'
    ];
}
