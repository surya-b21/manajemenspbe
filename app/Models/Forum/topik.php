<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topik extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'topik_forum';
    protected $guarded = [];
    public function komentar()
    {
        return $this->hasMany('App\Models\komentar', 'id_topik', 'id');
    }
}
