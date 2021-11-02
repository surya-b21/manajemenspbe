<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_smart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'elemen_smart';
    protected $guarded = [];
    public function children()
    {
        return $this->hasMany(kategori_smart::class, 'parent');
    }
}
