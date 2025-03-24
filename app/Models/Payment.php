<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    use HasFactory;
    protected $table = 'payments';
    public $primaryKey = 'payment_id';
    protected $fillable = [
        'payment_id', 
        'order_id',
        'payment_method',
        'payment_status',
        'payment_date'
    ];
}
