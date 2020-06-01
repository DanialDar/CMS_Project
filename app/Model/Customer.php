<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $fillable = [
        'title', 'name', 'email', 'contact_number', 'marital_status', 'birth_date', 'total_income', 'expenditure', 'creitor', 'postal_address', 'city', 'country', 'current_status', 'agent_id'
    ];
}
