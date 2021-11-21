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
    // protected $guarded = [];
    protected $fillable = [
        'nama',
        'deskripsi',
        'layanan_spbe',
        'tgl_launching',
        'tgl_upload',
        'id_opd',
        'id_ku',
        'create_by',
        'update_by',
    ];

    protected $casts = [
        'tgl_launching' => 'datetime',
        'tgl_upload' => 'datetime'
    ];

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class);
    }
}