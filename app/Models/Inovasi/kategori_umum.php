<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_umum extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'kategori_umum';
    protected $guarded = [];
    public function children()
    {
        return $this->hasMany(kategori_umum::class, 'parent');
    }
}
