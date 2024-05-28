<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThumbnailProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'thumbnail_products';
    protected $fillable = [
        'product_id','thumbnail'
    ];

    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
