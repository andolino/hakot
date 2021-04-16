<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contractors extends Authenticatable{
    // use HasFactory;
    use Notifiable;

    protected $guard = 'contractors';
    
    protected $fillable = [
        'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
    
}