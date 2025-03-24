<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    use HasFactory;
    protected $table = 'shipping';
    public $primaryKey = 'shipping_id';
    protected $fillable = [
        'shipping_id', 
        'order-id',
        'shipping-status',
        'tracking_number',
        'shipped_date',
        'delivery_date'
    ];
}
