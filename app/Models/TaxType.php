<?php

namespace App\Models;

class TaxType extends BaseModel
{

    protected $fillable = ['name', 'description', 'rate'];

    public static $searchableColumns = ['name', 'description'];


    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
