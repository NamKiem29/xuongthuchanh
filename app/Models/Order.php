<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    use HasFactory;
    protected $table = 'orders';
    public $primaryKey = 'order_id';
    protected $fillable = [
        'order_id',
        'user_id',
        'total_price',
        'order_status',
        'shipping_address',
        'payment_method',
        'created_at',
        'updated_at'
    ];
}
