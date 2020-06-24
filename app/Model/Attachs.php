<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attachs extends Model
{
    protected $table = "attachs";
    protected $fillable = [
        'user_mail', 'filename'
    ];

    //
}
