<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;

    protected $fillable=[
        'employee_id',
        'user_id',
        'patient_name',
        'numberofvisits',
        
     ];
}
