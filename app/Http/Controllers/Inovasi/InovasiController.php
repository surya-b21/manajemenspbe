<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Models\Inovasi\kategori_umum;
use App\Models\Inovasi\kategori_smart;
use App\Models\Inovasi\kategori_layanan;
use App\Models\opd;
use App\Models\developer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InovasiController extends Controller
{
    public function index()
    {
        $ku = kategori_umum::paginate(4);
        $kl = kategori_layanan::all();
        $ks = kategori_smart::paginate(5);
        $inovasi = inovasi::all();
        return view("template2.homepage", [
            'active' => 'inovasi',
            "inovasi" => $inovasi,
            "ku" => $ku,
            "kl" => $kl,
            "ks" => $ks
        ]);
    }

    public function inovasi()
    {
        $ku = kategori_umum::paginate(4);
        $kl = kategori_layanan::all();
        $ks = kategori_smart::paginate(5);
        $inovasi = inovasi::all();
        return view("Inovasi.inovasi", [
            'active' => 'inovasi',
            "inovasi" => $inovasi,
            "ku" => $ku,
            "kl" => $kl,
            "ks" => $ks
        ]);
    }

    public function read($id_inovasi)
    {
        $data = $id_inovasi;
        $ku = kategori_umum::paginate(4);
        $kl = kategori_layanan::all();
        $ks = kategori_smart::all();
        $dev = developer::all();
        $inovasi = inovasi::all();
        $opd = opd::all();
        return view("Inovasi.inovasi_read", [
            'active' => 'inovasi',
            "inovasi" => $inovasi->where('id', $data),
            "ku" => $ku,
            "kl" => $kl,
            "ks" => $ks,
            "opd" => $opd,
            "dev" => $dev,
            "home" => "/home",
            "inov" => "/inovasi"
        ]);
    }

    public function kategori_layanan($data)
    {
        $inovasi = inovasi::paginate(8);
        $kategori = kategori_layanan::all();

        return view("Inovasi.inovasi_kategori", [
            'active' => 'inovasi',
            "jenis" => "3",
            "kategori" => $kategori->where('id', $data),
            "inovasi" => $inovasi->where('id_layanan', $data)
        ]);
    }

    public function kategori_smart($data)
    {
        $inovasi = inovasi::paginate(8);
        $kategori = kategori_smart::all();

        return view("Inovasi.inovasi_kategori", [
            'active' => 'inovasi',
            "jenis" => "2",
            "kategori" => $kategori->where('id', $data),
            "inovasi" => $inovasi->where('id_smart', $data)
        ]);
    }

    public function kategori_umum($data)
    {
        $inovasi = inovasi::paginate(8);
        $kategori = kategori_umum::all();

        return view("Inovasi.inovasi_kategori", [
            'active' => 'inovasi',
            "jenis" => "1",
            "kategori" => $kategori->where('id', $data),
            "inovasi" => $inovasi->where('id_ku', $data)
        ]);
    }
}