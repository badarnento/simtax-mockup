<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxEntity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tax_number', 'address'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
