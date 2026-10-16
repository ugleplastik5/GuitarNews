<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'login',
        'password',
        'banned',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'banned' => 'boolean',
        ];
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}