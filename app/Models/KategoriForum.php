<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Hexters\Ladmin\LadminLogable;
use Illuminate\Database\Eloquent\Model;

class KategoriForum extends Model
{
    use HasFactory, LadminLogable;

    public $keyType = 'string';
    protected $table = 'kategori_forum';
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(KategoriForum::class, 'parent');
    }

    public function topiks()
    {
        return $this->hasMany(Topik::class);
    }
}