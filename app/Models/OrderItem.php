<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    use HasFactory;
    protected $table = 'order_items';
    public $primaryKey = 'order_items_id';
    protected $fillable = [
        'order_items_id', 
        'order_id', 
        'product_id',
        'quantity',
        'price'
    ];
}
