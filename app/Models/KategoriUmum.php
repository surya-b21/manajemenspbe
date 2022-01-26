<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Model;

class KategoriUmum extends Model
{
    use HasFactory, LadminLogable;

    protected $table = 'kategori_umum';
    protected $fillable = [
        'kategori',
        'jenis_urusan',
        'id_smart',
        'id_opd',
        'create_by',
        'update_by',
    ];
}
