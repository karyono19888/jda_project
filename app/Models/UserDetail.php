<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
