<?php

namespace App\Models;

class TaxEntity extends BaseModel
{

    protected $fillable = ['name', 'tax_number', 'address'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
