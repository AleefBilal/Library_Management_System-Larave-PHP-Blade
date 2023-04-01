<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getAllCategories()
    {
     return Category::all();
    }

    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
