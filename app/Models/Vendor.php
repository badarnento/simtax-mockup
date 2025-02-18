<?php

namespace App\Models;


class Vendor extends BaseModel
{

    protected $fillable = [
        'vendor_id', 'vendor_name', 'vendor_email', 'vendor_address', 'tax_type', 'phone', 'contact_person'
    ];
}
