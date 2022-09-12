<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addEmployee extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'position',
        'date',
        'hourlyrate',
        'rate',
        'status'
    ];
}
