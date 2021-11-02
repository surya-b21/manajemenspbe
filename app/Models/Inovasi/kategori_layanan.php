<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_layanan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'kategori_layanan';
    protected $guarded = [];
    public function children()
    {
        return $this->hasMany(kategori_layanan::class, 'parent');
    }
}
