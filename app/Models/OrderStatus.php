<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'order_statuses';
    protected $fillable = [
        'name',
    ];

    public function order() :HasMany
    {
        return $this->hasMany(Order::class,'order_status_id');
    }
}
