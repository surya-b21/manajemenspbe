<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Inovasi\kategori_smart;
use App\Models\Inovasi\kategori_umum;
use App\Models\Inovasi\inovasi;
use App\Models\Forum\Topik;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SmartController extends Controller
{
    protected $table = 'elemen_smart_forum';
    public function __construct()
    {
        $this->kategori_umum = new kategori_umum();
        $this->inovasi = new inovasi();
    }
    public function index()
    {
        $smart = kategori_smart::all();
        return view("inovasi.smart")->with([
            'active' => 'inovasi',
            'inovasi' => $smart
        ]);
    }
    public function allCategories()
    {
        $categories = kategori_smart::all();
        $penulis = User::all();
        $inovasi = Inovasi::simplePaginate(3);;
        // $inovasi =  Inovasi::where('tgl_launching', date('Y'))->paginate(2);
        $urusan = kategori_umum::all();
        $inoSmart =  $this->inovasi->inovasiKomplit();
        $joinUrusan = $this->kategori_umum->joinUrusan();
        return view("inovasi.smart")->with([
            'active' => 'inovasi',
            'smart' => $categories,
            'penulis' => $penulis,
            'tahunnow' => date("Y"),
            'urusan' => $urusan,
            'inovasi' => $inovasi,
            // 'inovasipaginate' => $inovasipaginate,
            'inoSmart' => $inoSmart,
            'joinUrusan' => $joinUrusan
        ]);
        // return $inoSmart;
    }
    public function home()
    {
        $smart = kategori_smart::all();
        $topik = Topik::all();
        $penulis = User::all();
        $urusan = kategori_umum::all();
        $inovasi =  $this->inovasi->inovasiKomplit();
        $joinUrusan = $this->kategori_umum->joinUrusan();
        return view("template2.homepage")->with([
            'active' => 'inovasi',
            'smart' => $smart,
            'penulis' => $penulis,
            'urusan' => $urusan,
            'topik' => $topik,
            'inovasi' => $inovasi,
            'joinUrusan' => $joinUrusan
        ]);
        // return $joinUrusan;
    }
    public function selectsmart($id) //select inovasii berdasarkan smart
    {
        $smart = kategori_smart::all();
        $idku = kategori_umum::all()->where('id_smart', $id);
        $idurusanSesuai = DB::table('kategori_umum')->select('id')->where('id_smart', $id)->get()->toArray();
        $urusanSesuai = DB::table('kategori_umum')->select('kategori')->where('id_smart', $id)->get()->toArray();
        $urusan = kategori_umum::all();
        $inovasi =  Inovasi::orderBy('tgl_launching', 'desc')->paginate(3);
        $inoSmart =  $this->inovasi->inovasiKomplit();

        return view("inovasi.isismart")->with([
            'active' => 'inovasi',
            'idsmart' => $id,
            'tahunpilih' => date("Y"),
            'inovasi' => $inovasi,
            'urusan' => $urusan,
            'smart' => $smart,
        ]);
    }
    public function select($id, $tahun) //select inovasii berdasarkan smart
    {
        $smart = kategori_smart::all();
        $idku = kategori_umum::all()->where('id_smart', $id);
        $idurusanSesuai = DB::table('kategori_umum')->select('id')->where('id_smart', $id)->get()->toArray();
        $urusanSesuai = DB::table('kategori_umum')->select('kategori')->where('id_smart', $id)->get()->toArray();
        $urusan = kategori_umum::all();
        $inovasi =  Inovasi::all();
        $inoSmart =  $this->inovasi->inovasiKomplit();

        return view("inovasi.isismart2")->with([
            'active' => 'inovasi',
            'idsmart' => $id,
            'tahunpilih' => $tahun,
            'inovasi' => $inovasi,
            'urusan' => $urusan,
            'smart' => $smart,
        ]);
        // return $smart[($id - 1)]['element'];
        // return $idurusanSesuai;
    }
    public function tahun($idtahun)
    {
        $inovasi = inovasi::paginate(4);
        $tgl = inovasi::all('tgl_launching');
        $inoSmart =  $this->inovasi->inovasiKomplit();
        return view("inovasi.tahun")->with([
            'active' => 'inovasi',
            'inovasi' => $inovasi,
            'tgl' => $tgl,
            'idtahun' => $idtahun,
            'inoSmart' => $inoSmart,
        ]);
        // return substr($tgl, 19, 4);
    }
    public function urusan($id_urusan)
    {
        $inovasi =  Inovasi::orderBy('tgl_launching', 'desc')->paginate(3);
        $inoSmart =  $this->inovasi->inovasiKomplit();
        $urusan =  kategori_umum::all();
        return view("inovasi.urusan")->with([
            'active' => 'inovasi',
            'inovasi' => $inovasi,
            'urusan' => $urusan,
            'id_urusan' => $id_urusan,
            'inoSmart' => $inoSmart,
        ]);
        // return $urusan;
    }
}
