<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*
----------------------------------------------------------------------------------------------
                                        TABEL INI TIDAK DIPAKAI
----------------------------------------------------------------------------------------------

*/

class RefInovasiEsmart extends Model
{
    use HasFactory;

    protected $table = 'ref_inovasi_esmart';

    protected $fillable = [
        'id_inovasi',
        'id_esmart',
        'create_by',
        'update_by',
    ];
}
