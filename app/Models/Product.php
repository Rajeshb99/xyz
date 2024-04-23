<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['category_id', 'name', 'description', 'sku', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
