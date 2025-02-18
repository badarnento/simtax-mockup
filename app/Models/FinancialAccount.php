<?php

namespace App\Models;

class FinancialAccount extends BaseModel
{

    protected $fillable = ['account_name', 'account_number', 'account_type'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
