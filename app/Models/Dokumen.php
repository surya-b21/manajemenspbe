<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hexters\Ladmin\LadminLogable;

class Dokumen extends Model
{
    use HasFactory, LadminLogable;

    protected $table = 'dokumen';

    protected $fillable = [
        'judul',
        'file_path'
    ];
}
