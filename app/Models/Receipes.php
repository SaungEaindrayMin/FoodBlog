<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

class Receipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'paragraph',
        'ingredients', 
        'instructions',
        'category_id',
        'image', 
        'video',
        'user_id'
    ];

    protected $casts = [
        'ingredients' => 'array',
        'instructions' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
