<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vehicle_type extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'vehicle_type';
    protected $fillable = [
        'name',
    ];

    
}
