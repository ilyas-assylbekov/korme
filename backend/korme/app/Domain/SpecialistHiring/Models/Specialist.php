<?php

namespace App\Domain\SpecialistHiring\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Specialist extends Model 
{
    use HasUuids;

    protected $fillable = [
        'username',
        'email',
        'specialty',
        'bio',
        'phone'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}