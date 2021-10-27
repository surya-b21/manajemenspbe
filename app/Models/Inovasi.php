<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Model;

class Inovasi extends Model
{
    use Notifiable, HasFactory, LadminLogable;

    protected $table = 'inovasi';

    protected $fillable = [
        'nama',
        'deskripsi',
        'layanan_spbe',
        'tgl_launching',
        'tgl_upload',
        'id_opd',
        'id_ku'
    ];

    protected $casts = [
        'tgl_launching' => 'datetime',
        'tgl_upload' => 'datetime'
    ];
}
