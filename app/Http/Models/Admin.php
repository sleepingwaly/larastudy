<?php

namespace App\Http\Models;

use Illuminate\Foundation\Auth\User AS Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = ['username', 'phone', 'password', 'avatar'];
}
