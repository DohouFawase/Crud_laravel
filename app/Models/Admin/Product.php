<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "quantity",
        "image",
        "stock"
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
