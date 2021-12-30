<?php

namespace App\Http\Controllers\API\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Http\Controllers\Controller;
use App\Models\ElemenSmart;
use App\Models\Inovasi\kategori_layanan;
use App\Models\KategoriUmum;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiInovasi extends Controller
{
    public function index()
    {
        $Inovasi = Inovasi::all();
        return response()->json([
            "status" => true,
            "message" => "inovasi",
            "data" => $Inovasi
        ], 200);
    }
    public function dokumenIno()
    {
        $Inovasi = Inovasi::dokumenIno();
        return response()->json([
            "status" => true,
            "message" => "Dokumen Inovasi",
            "data" => $Inovasi
        ], 200);
    }
    public function showDokumen($id)
    {
        $dokumen = Dokumen::all();
        $dok = Dokumen::all();
        $row = count($dok);
        for ($i = 0; $i < $row; $i++) {
            if ($dokumen[$i]['id'] == $id) {
                // return ($dokumen[$i]['file_path']);
                return response()->file(public_path(
                    'storage/' . substr($dokumen[$i]['file_path'], 7)
                ));
            }
        }
    }

    public function versiIno()
    {
        $Inovasi = Inovasi::versiIno();
        return response()->json([
            "status" => true,
            "message" => "Versi Inovasi",
            "data" => $Inovasi
        ], 200);
    }
    public function varian()
    {
        // $KU = KategoriUmum::all('kategori');
        $elemen = ElemenSmart::all('element');
        return response()->json([
            "status" => true,
            "message" => "elemen",
            "data" => $elemen
        ], 200);
    }
    public function showimage($id)
    {
        $Inovasi[] = Inovasi::all();
        $ino = Inovasi::all();
        $row = count($ino);
        for ($i = 0; $i < $row; $i++) {
            if ($Inovasi[0][$i]['id'] == $id) {
                //  return ($Inovasi[0][$i]['foto_path']);
                return response()->file(public_path(
                    'storage/' . substr($Inovasi[0][$i]['poster_path'], 7)
                ));
            }
        }
    }
}
