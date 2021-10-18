<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hexters\Ladmin\LadminLogable;

class ElemenSmart extends Authenticatable
{
    use HasFactory, LadminLogable;

    protected $table = 'elemen_smart';

    protected $fillable = [
        'element',
        'deskripsi'
    ];
}
