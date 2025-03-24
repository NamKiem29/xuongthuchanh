<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $primaryKey = 'product_id';
    protected $fillable = [
        'product_id', 
        'name',
        'image',
        'description',
        'price',
        'discount_percent',
        'stock_quantity',
        'category-id',
        'brand_id',
        'created_at',
        'updated_at'
    ];
}
