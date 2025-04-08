<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pet extends Model
{
    protected $fillable = [
        'name', 'description', 'color', 'category_id', 
        'gender', 'age', 'price', 'is_popular'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        return $this->hasMany(PetImage::class);
    }
}
