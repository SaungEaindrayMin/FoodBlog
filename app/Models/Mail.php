<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'contact_mails';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'details'
    ];
}
