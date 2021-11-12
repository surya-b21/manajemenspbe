<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inovasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'inovasi';
    protected $guarded = ['id'];
    public function children()
    {
        return $this->hasMany(inovasi::class, 'parent');
    }
}