<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CreditorInfo extends Model
{
    protected $table = "creditor_info";
    protected $fillable = [
        'name', 'customer_id', 'acc_no', 'owed', 'method'
    ];
}
