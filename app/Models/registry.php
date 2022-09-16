<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registry extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'employee_id',
        'typeofemployment',
        'registrytype',
        'status',
        
    ];

    public function registry()
    {
        return $this->hasMany(addEmployee::class);
    }
}
