<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'age',
        'dob',
        'employee_id',
        'stage',
        'city',
        'education',
        'experience',
        'degree'
    ];
}
