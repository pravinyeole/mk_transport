<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Material_weight extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'material_weight';
    protected $fillable = [
        'name',
    ];

    
}
