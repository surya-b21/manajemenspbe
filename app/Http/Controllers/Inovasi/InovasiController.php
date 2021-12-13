<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Models\Inovasi\kategori_umum;
use App\Models\Inovasi\kategori_smart;
use App\Models\opd;
use App\Models\developer;
use App\Models\dokumen;
use App\Models\Forum\Topik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InovasiController extends Controller
{
    public function index()
    {
        $topik = Topik::all();
        $ku = kategori_umum::paginate(5);
        $ks = kategori_smart::paginate(6);
        $inovasi = inovasi::all();
        return view("template2.homepage", [
            "active" => "home",
            "inovasi" => $inovasi,
            "ku" => $ku,
            "ks" => $ks,
            'topik' => $topik,
        ]);
    }
    public function read($jenis, $id_jenis, $id_inovasi)
    {
        $data = $id_inovasi;
        $ku = kategori_umum::paginate(4);
        $ks = kategori_smart::all();
        $dev = developer::all();
        $inovasi = inovasi::all();
        $inovasi2 = inovasi::paginate(4);
        $dokumen = dokumen::all();
        $opd = opd::all();

        if ($jenis == 1) {
            $kategori = "/inovasi/kategori_umum/$id_jenis";
            $terkait = $inovasi2->where('id_ku', $id_jenis);
        }
        if ($jenis == 2) {
            $kategori = "/inovasi/kategori_smart/$id_jenis";
            $terkait = $inovasi2->where('id_smart', $id_jenis);
        }
        if ($jenis == 3) {
            $kategori = "/inovasi/kategori_layanan/$id_jenis";
            $terkait = $inovasi2->where('layanan_spbe', $id_jenis);
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
            "self_url" => $self_url,
            "terkait" => $terkait
        ]);
    }

    public function kategori(Request $request)
    {
        // Get the search value from the request
        $jenis = $request->input('jenis');
        $id_kategori = $request->input('id_kategori');

        // dd(request('search'));
        // dd(request('jenis'));
        // dd(request('id_kategori'));
        if ($jenis == 1) {
            $inovasi = inovasi::where('id_ku', $id_kategori)->paginate(8);
            $kategori = kategori_umum::all()->where('id', $id_kategori);
        } else if ($jenis == 2) {
            $inovasi = inovasi::where('id_smart', $id_kategori)->paginate(8);
            $kategori = kategori_smart::all()->where('id', $id_kategori);
        } else if ($jenis == 3) {
            $inovasi = inovasi::where('layanan_spbe', $id_kategori)->paginate(8);
            if ($id_kategori == 1) {
                $kategori = "Layanan Administrasi Pemerintah";
            } else {
                $kategori = "Layanan Publik";
            }
        }
        // Return the search view with the resluts compacted
        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => $jenis,
            "id_kategori" => $id_kategori,
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

        if ($jenis == 1) {
            $inovasi = Inovasi::where('id_ku', $id_kategori)
                ->where(function ($query) use ($search) {
                    $query->where('nama', 'LIKE', '%' . $search . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
                })
                ->paginate(8);
            $kategori = kategori_umum::all()->where('id', $id_kategori);
        } else if ($jenis == 2) {
            $inovasi = Inovasi::where('id_smart', $id_kategori)
                ->where(function ($query) use ($search) {
                    $query->where('nama', 'LIKE', '%' . $search . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
                })
                ->paginate(8);
            $kategori = kategori_smart::all()->where('id', $id_kategori);
        } else if ($jenis == 3) {
            $inovasi = Inovasi::where('layanan_spbe', $id_kategori)
                ->where(function ($query) use ($search) {
                    $query->where('nama', 'LIKE', "%{$search}%")
                        ->orWhere('deskripsi', 'LIKE', "%{$search}%");
                })
                ->paginate(8);
            if ($id_kategori == 1) {
                $kategori = "Layanan Administrasi Pemerintah";
            } else {
                $kategori = "Layanan Publik";
            }
        }

        // Return the search view with the resluts compacted
        return view("Inovasi.inovasi_kategori", [
            "active" => "inovasi",
            "jenis" => $jenis,
            "id_kategori" => $id_kategori,
            "kategori" => $kategori,
            "inovasi" => $inovasi
        ]);
    }
}