<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Models\Inovasi\kategori_umum;
use App\Models\ElemenSmart;
use App\Models\opd;
use App\Models\developer;
use App\Models\dokumen;
use App\Models\Forum\Topik;
use App\Models\RefInovasiEsmart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InoController extends Controller
{
    public function index()
    {
        $topik = Topik::all();
        $ku = kategori_umum::paginate(5);
        $esmart = ElemenSmart::paginate(6);
        $inovasi = inovasi::all();
        $ks = RefInovasiEsmart::all();
        return view("template2.homepage", [
            "active" => "home",
            "inovasi" => $inovasi,
            "ku" => $ku,
            "ks" => $ks,
            'topik' => $topik,
            "esmart" => $esmart
        ]);
    }

    public function inovasi()
    {
        $topik = Topik::all();
        $ku = kategori_umum::paginate(5);
        $esmart = ElemenSmart::paginate(6);
        $inovasi = inovasi::all();
        $ks = RefInovasiEsmart::all();
        return view("Inovasi.inovasi", [
            "active" => "inovasi",
            "inovasi" => $inovasi,
            "ku" => $ku,
            "ks" => $ks,
            'topik' => $topik,
            "esmart" => $esmart
        ]);
    }
    public function read(Request $request)
    {
        $jenis = $request->input('jenis');
        $id_jenis = $request->input('id_jenis');
        $id_inovasi = $request->input('id_inovasi');

        $data = $id_inovasi;
        $ku = kategori_umum::all();
        $esmart = ElemenSmart::all();
        $dev = developer::all();
        $inovasi = inovasi::all();
        $inovasi2 = inovasi::paginate(4);
        $dokumen = dokumen::all();
        $opd = opd::all();
        $ks = RefInovasiEsmart::all();

        if ($jenis == 1) {
            $terkait = $inovasi2->where('id_ku', $id_jenis);
        }
        if ($jenis == 2) {
            $terkait = $ks->where('id_esmart', $id_jenis);
            // $terkait = $esmart_inov_id;
        }
        if ($jenis == 3) {
            if ($id_jenis == 1) {
                $layanan = "Layanan Administrasi Pemerintah";
            } else {
                $layanan = "Layanan Publik";
            }
            $terkait = $inovasi2->where('layanan_spbe', $layanan);
        }
        $self_url = "/inovasi/read/$jenis/$id_jenis/$id_inovasi";

        return view("Inovasi.inovasi_read", [
            "active" => "inovasi",
            "inovasi" => $inovasi->where('id', $data),
            "ku" => $ku,
            "ks" => $ks,
            "esmart" => $esmart,
            "opd" => $opd,
            "dev" => $dev,
            "home" => "/home",
            "inov" => "/inovasi",
            "jenis" => $jenis,
            "dokumen" => $dokumen,
            "id_jenis" => $id_jenis,
            // "kategori" => $kategori,
            "self_url" => $self_url,
            "terkait" => $terkait
        ]);
    }

    public function kategori(Request $request)
    {
        // Get the search value from the request
        $jenis = $request->input('jenis');
        $id_kategori = $request->input('id_kategori');
        $esmart = ElemenSmart::all()->where('id', $id_kategori);

        if ($jenis == 1) {
            $inovasi = inovasi::where('id_ku', $id_kategori)->paginate(8);
            $kategori = kategori_umum::all()->where('id', $id_kategori);
        } else if ($jenis == 2) {
            $kategori = RefInovasiEsmart::all()->where('id_esmart', $id_kategori);
            $inovasi = inovasi::paginate(8);
        } else if ($jenis == 3) {
            if ($id_kategori == 1) {
                $kategori = "Layanan Administrasi Pemerintah";
            } else {
                $kategori = "Layanan Publik";
            }
            $inovasi = inovasi::where('layanan_spbe', $kategori)->paginate(8);
        }
        // Return the search view with the resluts compacted
        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => $jenis,
            "id_kategori" => $id_kategori,
            "esmart" => $esmart,
            "kategori" => $kategori,
            "inovasi" => $inovasi
        ]);
    }

    public function cari_kategori(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');
        $jenis = $request->input('jenis');
        $id_kategori = $request->input('id_kategori');
        $esmart = ElemenSmart::all();

        if ($jenis == 1) {
            $inovasi = Inovasi::where('id_ku', $id_kategori)
                ->where(function ($query) use ($search) {
                    $query->where('nama', 'LIKE', '%' . $search . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
                })
                ->paginate(8);
            $kategori = kategori_umum::all()->where('id', $id_kategori);
        } else if ($jenis == 2) {
            $kategori = RefInovasiEsmart::all()->where('id_esmart', $id_kategori);
            $inovasi = inovasi::paginate(8);
        } else if ($jenis == 3) {
            if ($id_kategori == 1) {
                $kategori = "Layanan Administrasi Pemerintah";
            } else {
                $kategori = "Layanan Publik";
            }
            $inovasi = Inovasi::where('layanan_spbe', $kategori)
                ->where(function ($query) use ($search) {
                    $query->where('nama', 'LIKE', "%{$search}%")
                        ->orWhere('deskripsi', 'LIKE', "%{$search}%");
                })
                ->paginate(8);
        }
        // Return the search view with the resluts compacted
        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => $jenis,
            "id_kategori" => $id_kategori,
            "esmart" => $esmart,
            "kategori" => $kategori,
            "inovasi" => $inovasi
        ]);
    }
}
