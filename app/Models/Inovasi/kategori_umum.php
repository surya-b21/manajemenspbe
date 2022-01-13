<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
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
    public function joinUrusan()
    {
        $joinUrusan = DB::table('kategori_umum') //typo harusnya "elemen_smart_umum"
            ->leftJoin('elemen_smart_forum', 'kategori_umum.id_smart', '=', 'elemen_smart_forum.id')
            ->select('kategori_umum.id as id_ku', 'kategori_umum.kategori', 'kategori_umum.kategori', 'elemen_smart_forum.element', 'elemen_smart_forum.id as id_smart')
            ->get('*');
        return $joinUrusan;
    }
    public function kategori_smart()
    {
        return $this->belongsTo('App\Models\Inovasi\kategori_smart', 'id_smart', 'id');
    }
}
