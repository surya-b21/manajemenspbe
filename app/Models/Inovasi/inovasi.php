<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class inovasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'inovasi';
    protected $guarded = ['id'];
    // public function children()
    // {
    //     return $this->hasMany(inovasi::class, 'parent');
    // }

    public static function joinSmart()
    { //join inovasi, smart, urusan/kkategori umum
        $joinSmart = DB::table('inovasi')
            ->leftJoin('kategori_umum', 'inovasi.id_ku', '=', 'kategori_umum.id')
            ->leftJoin('elemen_smart_forum', 'kategori_umum.id_smart', '=', 'elemen_smart_forum.id')
            ->select('inovasi.*', 'inovasi.id as id_ino', 'kategori_umum.id as idku', 'kategori_umum.kategori', 'elemen_smart_forum.element', 'elemen_smart_forum.id as id_smart')
            ->get('*');
        return $joinSmart;
    }
    public static function dokumenIno()
    {
        $inoSmart = DB::table('inovasi')
            ->rightJoin('dokumen', 'inovasi.id', '=', 'dokumen.id_inovasi')
            ->select('inovasi.*', 'dokumen.id as id_dok', 'dokumen.judul', 'dokumen.file_path')
            ->get('*');
        return $inoSmart;
    }
    public static function versiIno()
    {
        $inoSmart = DB::table('inovasi')
            ->rightJoin('versi', 'inovasi.id', '=', 'versi.id_inovasi')
            ->rightJoin('developer', 'versi.id_dev', '=', 'developer.id')
            ->select('inovasi.*', 'versi.nama as namaversi', 'versi.deskripsi as deskripsiversi', 'versi.tgl_versi', 'developer.nama_dev')
            ->get('*');
        return $inoSmart;
    }
}
