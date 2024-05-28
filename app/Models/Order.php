<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'buyer_id','seller_id','product_id','file','rate','expired','order_status_id'
    ];

    public function user_buyer() : BelongsTo 
    {
        return $this->belongsTo(User::class,'buyer_id','id');    
    }

    public function user_seller() : BelongsTo 
    {
        return $this->belongsTo(User::class,'seller_id','id');    
    }

    public function product() :BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

    public function order_status() :BelongsTo
    {
        return $this->belongsTo(OrderStatus::class,'order_status_id','id');
    }
}
