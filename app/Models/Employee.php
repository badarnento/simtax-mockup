<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'position', 'department', 'salary', 'hire_date',
    ];

    public static $searchableColumns = ['name', 'email', 'phone', 'position'];

}
