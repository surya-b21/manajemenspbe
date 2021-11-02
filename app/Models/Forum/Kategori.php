<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'kategori_forum';
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Kategori::class, 'parent');
    }

    public function topiks()
    {
        return $this->hasMany(Topik::class);
    }
}