<?php

namespace App\Http\Models;

use Illuminate\Foundation\Auth\User AS Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use SoftDeletes;
    protected $fillable = ['username', 'phone', 'password', 'avatar'];
    protected $dates = ['deleted_at'];
}
