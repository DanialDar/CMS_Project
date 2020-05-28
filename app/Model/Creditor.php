<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Creditor extends Model
{
    protected $table = "creditors";
    protected $fillable = [
        'name', 'email', 'postal_address', 'contact_number'       
    ];
}
