<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Model;

class ElemenSmart extends Model
{
    use HasFactory, LadminLogable;

    protected $table = 'elemen_smart';

    protected $fillable = [
        'element',
        'deskripsi',
        'create_by',
        'update_by',
    ];
}
