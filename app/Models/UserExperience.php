<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserExperience extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'user_experiences';
    protected $fillable = [
        'detail_user_id','experience'
    ];

    public function detail_user() : BelongsTo 
    {
        return $this->belongsTo(UserDetail::class,'detail_user_id','id');
    }
}
