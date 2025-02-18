<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_date',
        'description',
        'amount',
        'tax_type_id',
        'account_id',
        'entity_id',
    ];

    public function taxType()
    {
        return $this->belongsTo(TaxType::class);
    }

    public function account()
    {
        return $this->belongsTo(FinancialAccount::class);
    }

    public function entity()
    {
        return $this->belongsTo(TaxEntity::class);
    }
}
