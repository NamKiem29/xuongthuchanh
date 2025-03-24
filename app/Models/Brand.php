<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    public $primaryKey = 'brand_id';
    protected $fillable = [
        'brand_id', 
        'name', 
        'country', 
        'created_at', 
        'updated_at'
    ];
}
