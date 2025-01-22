<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginAttempt extends Model
{
    protected $fillable = ['email', 'attempts', 'locked_until'];
    
    protected $casts = [
        'locked_until' => 'datetime',
    ];
}
