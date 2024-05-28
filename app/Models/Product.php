<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';
    protected $fillable = [
        'user_id','title','description','delivery_time','qty','price','rate'
    ];

    public function user() : BelongsTo 
    {
        return $this->belongsTo(User::class,'user_id','id');    
    }

    public function advantage_user() : HasMany 
    {
        return $this->hasMany(AdvantageUser::class,'product_id');
    }
    public function advantage_product() : HasMany 
    {
        return $this->hasMany(AdvantageProduct::class,'product_id');
    }
    public function thumbnail_product() : HasMany 
    {
        return $this->hasMany(ThumbnailProduct::class,'product_id');
    }
    public function tagline() : HasMany 
    {
        return $this->hasMany(Tagline::class,'product_id');
    }
    public function order() : HasMany 
    {
        return $this->hasMany(Order::class,'product_id');
    }
}
