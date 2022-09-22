<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paysummary extends Model
{
    use HasFactory;

    protected $fillable=[
        'date',
        'user_id',
        'patient_name',
        'employee_id_unique',
        'rate',
        'numberofvisits',
        'numberofmiles',
        'status',
        'typeofemployment',
        'invoicenumber',
        'totalrate',        
        'comments',
        'milesusd',
        'typeofvisit',
    ];
}
