<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    use HasFactory, SoftDeletes;
    public $table = 'user_details';
    protected $fillable = [
        'user_id',
        'photo',
        'role',
        'contact_number',
        'biography',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function experience_user() : HasMany 
    {
        return $this->hasMany(UserExperience::class,'detail_user_id');
    }
}
