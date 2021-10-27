<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class komentar extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'komentar_forum';
    protected $guarded = [];
    public function topik()
    {
        return $this->belongsTo('App\Models\topik', 'id_topik', 'id');
    }
}
