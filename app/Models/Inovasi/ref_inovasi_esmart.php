<?php

namespace App\Models\Inovasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ref_inovasi_esmart extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'ref_inovasi_esmart';
    protected $guarded = [];

    public function inovasi()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\inovasi', 'id_inovasi', 'id');
    }
    public function esmart()
    {
        // $this->relationsType("Model","Foreign_key","Local_key");
        return $this->belongsTo('App\Models\kategori_smart', 'id_esmart', 'id');
    }

    public static function joinin()
    {
        $inoSmart = DB::table('ref_inovasi_esmart')
            ->leftjoin('inovasi', 'ref_inovasi_esmart.id_inovasi', '=', 'inovasi.id')
            ->leftJoin('elemen_smart', 'ref_inovasi_esmart.id_esmart', '=', 'elemen_smart.id')
            ->leftJoin('kategori_umum', 'elemen_smart.id', '=', 'kategori_umum.id')
            ->leftJoin('opd', 'kategori_umum.id', '=', 'opd.id')
            ->select('*', 'inovasi.*', 'elemen_smart.element', 'kategori_umum.kategori', 'opd.nama_opd')
            ->get('*');
        return $inoSmart;

        /*
        query
        SELECT *
        FROM ref_inovasi_esmart
        LEFT JOIN inovasi
        ON ref_inovasi_esmart.id_inovasi = inovasi.id
        */
    }
}
