<?php

namespace App\Models;


class Employee extends BaseModel
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'department',
        'salary',
        'hire_date',
    ];

    public static $searchableColumns = ['name', 'email', 'phone', 'position'];
}
