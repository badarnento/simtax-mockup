<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialAccount extends Model
{
    use HasFactory;

    protected $fillable = ['account_name', 'account_number', 'account_type'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
