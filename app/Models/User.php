<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'name', 'email', 'password', 'role_id', 'armada'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'roleid');
    }
}

