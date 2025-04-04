<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //
    use HasFactory;
    protected $table = 'cart_items';
    public $primaryKey = 'cart_item_id';
    protected $fillable = [
        'cart_item_id', 
        'cart_id', 
        'product_id', 
        'quantity'
    ];
}
