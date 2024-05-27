<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tagline';
    protected $fillable = [
        'product_id','tagline'
    ];
}
