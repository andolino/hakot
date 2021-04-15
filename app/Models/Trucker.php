<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trucker extends Authenticatable{
    // use HasFactory;
    use Notifiable;

    protected $guard = 'trucker';
    
    protected $fillable = [
        'email', 'password'
        // 'username', 'username', 'lastname', 'firstname', 'middlename', 'rate_per_hr', 'country_id', 'objective_title', 'objective_text'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
