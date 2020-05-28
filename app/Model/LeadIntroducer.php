<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LeadIntroducer extends Model
{
    protected $table = "lead_introducers";
    protected $fillable = [
        'company_name', 'address', 'contact_name', 'contact_number', 'company_code'       
    ];

}
