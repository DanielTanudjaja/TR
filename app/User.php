<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard = 'user';

    protected $fillable = [
        'id_user', 'password', 'nik',
    ];

    protected $hidden = [
        'password', 'level',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
