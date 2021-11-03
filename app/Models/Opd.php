<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hexters\Ladmin\LadminLogable;

class Opd extends Model
{
    use HasFactory, LadminLogable;

    protected $table = 'opd';

    protected $fillable = [
        'nama_opd',
        'alamat',
        'telepon',
        'email',
        'create_by',
        'update_by',
    ];
}
