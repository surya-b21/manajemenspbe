<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hexters\Ladmin\LadminTrait;
use Hexters\Ladmin\LadminLogable;

class Inovasi extends Authenticatable
{
    use Notifiable, LadminTrait, MustVerifyEmail, LadminLogable;
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'deskripsi',
        'layanan_spbe',
        'tgl_launching',
        'tgl_upload',
        'status',
    ];

    protected $casts = [
        'tgl_launching',
        'tgl_upload'
    ];
}
