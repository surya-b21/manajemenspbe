<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD

class User extends Authenticatable
{
=======
use Hexters\Ladmin\LadminTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, LadminTrait;
>>>>>>> 30f376fdf611342ab7289a4ad7eda6413ae2f800
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
<<<<<<< HEAD
        'email',
        'password',
=======
        'username',
        'email',
        'password',
        'alamat',
>>>>>>> 30f376fdf611342ab7289a4ad7eda6413ae2f800
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
