<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    public $primaryKey = 'cart_id';
    protected $fillable = [
        'cart_id', 
        'user_id', 
        'created_at'
    ];
}
