<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class IncomeInfo extends Model
{
    protected $table = "income_info";
    protected $fillable = [
        'description', 'customer_id', 'total_income', 'bote', 'proof_of_attachment', 'date_of_income'
    ];
}
