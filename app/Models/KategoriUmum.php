<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hexters\Ladmin\LadminLogable;

class KategoriUmum extends Authenticatable
{
    use HasFactory, LadminLogable;

    protected $table = 'kategori_umum';
    protected $fillable = ['kategori'];
}
