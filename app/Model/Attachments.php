<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $table = "attachments";
    protected $fillable = [
        'inbox_id', 'filename'
    ];

    //
}
