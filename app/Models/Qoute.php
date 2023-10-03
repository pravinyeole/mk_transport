<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Qoute extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'qoute';
    protected $fillable = [
        'company_name',
        'name',
        'email',
        'mobile_number',
        'to_location',
        'from_location',
        'desc',
    ];

    
}
