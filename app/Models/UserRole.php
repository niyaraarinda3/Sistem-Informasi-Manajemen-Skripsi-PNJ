<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'user_role';

    function role()
    {
        return $this->hasOne(Role::class, "id", "role_id");
    }
    function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
