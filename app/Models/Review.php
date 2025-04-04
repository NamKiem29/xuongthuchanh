<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    use HasFactory;
    protected $table = 'reviews';
    public $primaryKey = 'review_id';
    protected $fillable = [
        'review_id', 
        'user_id',
        'product_id',
        'rating',
        'comment',
        'created_id'
    ];
}
