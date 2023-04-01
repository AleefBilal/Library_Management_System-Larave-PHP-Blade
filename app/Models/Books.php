<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Books extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    /**
     * @var false|mixed|string|null
     */
    protected string $file_path = '';

    protected $table = "books";
    protected $fillable = [
        'name',
        'author_name',
        'published_date',
        'category_id',
        'description',
        'downloadable',
        'file_path'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
