<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class kategori_smart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'elemen_smart_forum';
    protected $guarded = [];
    // public function children()
    // {
    //     return $this->hasMany(kategori_smart::class, 'parent');
    // }
    public function joinUrusan()
    {
        $joinUrusan = DB::table('elemen_smart_forum') //typo harusnya "elemen_smart_umum"
            ->rightJoin('kategori_umum', 'elemen_smart_forum.id', '=', 'kategori_umum.id_smart')
            ->select('elemen_smart_forum.*', 'kategori_umum.id as id_ku', 'kategori_umum.kategori', 'kategori_umum.kategori')
            ->get('*');
        return $joinUrusan;
    }
    public function kategori_umum()
    {
        return $this->hasMany('App\Models\Inovasi\kategori_umum', 'id_smart', 'id');
    }
}
