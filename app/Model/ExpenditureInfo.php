<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExpenditureInfo extends Model
{
    protected $table = "exp_info";
    protected $fillable = [
        'description', 'customer_id', 'total_exp','note', 'proof_of_attachment', 'schedule'
    ];
}
