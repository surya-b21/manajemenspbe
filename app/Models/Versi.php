<?php

namespace App\Models;

use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Versi extends Model
{
    use HasFactory, Notifiable, LadminLogable;

    protected $table = "versi";

    protected $fillable = [
        'nama',
        'deskripsi',
        'tgl_versi',
        'status',
        'id_dev',
        'create_by',
        'update_by',
    ];

    protected $casts = [
        'tgl_versi' => 'datetime'
    ];
}
