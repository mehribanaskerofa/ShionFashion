<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   protected $table='users';
   protected $guarded=[];

    protected $hidden = [
        'password',
        'remember_token',
    ];
//    protected $fillable = [
//        'name',
//        'email',
//        'password',
//    ];


//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
// avtomatic user yaratma
// php artisan tinker - contr ve routesuz useri database elave edir
// User::create(['email'=>'meh@mail.ru','password'=>Hash::make('meh123')])
