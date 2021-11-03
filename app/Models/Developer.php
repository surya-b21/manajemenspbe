<?php

namespace App\Models;

use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Developer extends Model
{
    use HasFactory, LadminLogable;

    protected $table = 'developer';

    protected $fillable = [
        'nama_dev',
        'alamat_dev',
        'NPWP_dev',
        'telepon_dev',
        'foto_dev_path',
        'create_by',
        'update_by',
    ];
}
