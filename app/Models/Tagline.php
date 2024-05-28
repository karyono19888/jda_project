<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagline extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tagline';
    protected $fillable = [
        'product_id','tagline'
    ];

    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
