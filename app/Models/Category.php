<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Relationships
    public function cat()
    {
        return $this->hasMany(SubCategory::class);
    }
}
