<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'advantage_products';
    protected $fillable = [
        'product_id',
        'advantage_product',
    ];
}
