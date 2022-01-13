<?php

namespace App\Http\Controllers\Inovasi;

use App\Models\Forum\Topik;
use Illuminate\Http\Request;
use App\Models\Inovasi\inovasi;
use App\Models\Inovasi\kategori_smart;
use App\Models\Inovasi\kategori_umum;
use App\Models\Versi;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Auth;

class KontenInovasiController extends Controller
{
    public function __construct()
    {
        $this->Inovasi = new Inovasi();
        $this->kategori_umum = new kategori_umum();
    }

    public function show($id)
    {
        $data = Inovasi::all()->where('id', $id);
        $data3 = User::all();
        $smart = kategori_smart::all();
        $versi = $this->Inovasi->versiIno()->where('id', $id);
        $dokumen = $this->Inovasi->dokumenIno()->where('id', $id);
        $joinUrusan = $this->kategori_umum->joinUrusan();
        $ku = $this->kategori_umum->all();
        return view(
            "inovasi.konteninovasi",
            [
                'active' => 'forum',
                'smart' => $smart,
                'inovasi' => $data,
                'user' => $data3,
                'versi' => $versi,
                'dokumen' => $dokumen,
                'joinUrusan' => $joinUrusan,
                'ku' => $ku,
            ],
        );
        // return $versi;
    }
}
