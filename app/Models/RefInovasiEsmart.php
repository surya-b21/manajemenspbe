<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefInovasiEsmart extends Model
{
    use HasFactory;

    protected $table = 'ref_inovasi_esmart';

    protected $fillable = [
        'id_inovasi',
        'id_esmart'
    ];
}
