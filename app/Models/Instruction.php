<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'step_order',
        'receipe_id',
    ];

    /**
     * Get the recipe that owns the instruction
     */
    public function recipe()
    {
        return $this->belongsTo(Receipes::class, 'receipe_id');
    }
}
