<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvantageUser extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'advantage_user';
    protected $fillable =[
        'product_id',
        'advantage'
    ];
}
