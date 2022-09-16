<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\registry;

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
        'status',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function registry()
    {
        return $this->hasMany(registry::class);
    }
}
