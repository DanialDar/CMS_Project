<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = "income";
    protected $fillable = [
        'customer_id', 'total_income', 'note', 'proof_of_attachment', 'date_of_income'
    ];
}
