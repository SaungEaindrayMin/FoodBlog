<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'quantity',
        'unit',
        'receipe_id',
    ];

    /**
     * Get the recipe that owns the ingredient
     */
    public function recipe()
    {
        return $this->belongsTo(Receipes::class, 'receipe_id');
    }
}
