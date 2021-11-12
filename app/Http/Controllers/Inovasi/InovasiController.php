<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Models\Inovasi\kategori_umum;
use App\Models\Inovasi\kategori_smart;
use App\Models\opd;
use App\Models\developer;
use App\Models\dokumen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InovasiController extends Controller
{
    public function index()
    {
        $ku = kategori_umum::paginate(5);
        $ks = kategori_smart::paginate(6);
        $inovasi = inovasi::all();
        return view("template2.homepage", [
            "active" => "inovasi",
            "inovasi" => $inovasi,
            "ku" => $ku,
            "ks" => $ks
        ]);
    }

    public function inovasi()
    {
        $ku = kategori_umum::paginate(5);
        $ks = kategori_smart::paginate(6);
        $inovasi = inovasi::all();
        return view("Inovasi.inovasi", [
            "active" => "inovasi",
            "inovasi" => $inovasi,
            "ku" => $ku,
            "ks" => $ks
        ]);
    }

    public function read($jenis, $id_jenis, $id_inovasi)
    {
        $data = $id_inovasi;
        $ku = kategori_umum::paginate(4);
        $ks = kategori_smart::all();
        $dev = developer::all();
        $inovasi = inovasi::all();
        $dokumen = dokumen::all();
        $opd = opd::all();

        if ($jenis == 1) {
            $kategori = "/inovasi/kategori_umum/$id_jenis";
        }
        if ($jenis == 2) {
            $kategori = "/inovasi/kategori_smart/$id_jenis";
        }
        if ($jenis == 3) {
            $kategori = "/inovasi/kategori_layanan/$id_jenis";
        }
        $self_url = "/inovasi/read/$jenis/$id_jenis/$id_inovasi";

        return view("Inovasi.inovasi_read", [
            "active" => "inovasi",
            "inovasi" => $inovasi->where('id', $data),
            "ku" => $ku,
            "ks" => $ks,
            "opd" => $opd,
            "dev" => $dev,
            "home" => "/home",
            "inov" => "/inovasi",
            "jenis" => $jenis,
            "dokumen" => $dokumen,
            "id_jenis" => $id_jenis,
            "kategori" => $kategori,
            "self_url" => $self_url
        ]);
    }

    public function kategori_layanan($data)
    {
        $inovasi = inovasi::where('id_layanan', $data)->paginate(8);
        if ($data == 1) {
            $kategori = "Layanan Administrasi Pemerintah";
            $id_kategori = 1;
        } else {
            $kategori = "Layanan Publik";
            $id_kategori = 2;
        }

        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => "3",
            "kategori" => $kategori,
            "id_kategori" => $id_kategori,
            "inovasi" => $inovasi
        ]);
    }

    public function kategori_smart($data)
    {
        $inovasi = inovasi::where('id_smart', $data)->paginate(8);
        $kategori = kategori_smart::all();

        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => "2",
            "kategori" => $kategori->where('id', $data),
            "inovasi" => $inovasi
        ]);
    }

    public function kategori_umum($data)
    {
        $inovasi = inovasi::where('id_ku', $data)->paginate(8);
        $kategori = kategori_umum::all();

        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => "1",
            "kategori" => $kategori->where('id', $data),
            "inovasi" => $inovasi
        ]);
    }
}