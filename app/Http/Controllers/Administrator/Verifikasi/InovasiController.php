<?php

namespace App\Http\Controllers\Administrator\Verifikasi;

use App\Http\Controllers\Controller;
use App\Models\Inovasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class InovasiController extends Controller
{
    public function index()
    {
        return view('verifikasi.inovasi.index');
    }

    public function verified($id)
    {
        $inovasi = Inovasi::findOrFail($id);
        $inovasi->status = 1;
        $inovasi->save();

        return redirect()->route('administrator.verifikasi.inovasi.index')->with('sukses','Data berhasil di verifikasi');
    }

    public function unverify($id)
    {
        $inovasi = Inovasi::findOrFail($id);
        $inovasi->status = 0;
        $inovasi->save();

        return redirect()->route('administrator.verifikasi.inovasi.index')->with('sukses','Berhasil membatalkan verifikasi');
    }

    public function getData()
    {
        $query = DB::table('inovasi')->select('id','nama','status');
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', function($inovasi) {
                if ($inovasi->status == 0) {
                    return '<a class="btn btn-success" href="'.route('administrator.verifikasi.inovasi.verified',$inovasi->id).'">Verifikasi</a>';
                } else {
                    return '<a class="btn btn-danger" data-url="'.route('administrator.verifikasi.inovasi.unverify',$inovasi->id).'" id="batal-verif">Batal Verifikasi</a>';
                }
            })
            ->editColumn('status', function($inovasi) {
                if ($inovasi->status == 0) {
                    // return 'Belum Diverifikasi';
                    return '<h5><span class="badge bg-warning">Belum Diverifikasi</span></h5>';
                } else {
                    return '<h5><span class="badge bg-success">Diverifikasi</span></h5>';
                }
            })
            ->rawColumns(['aksi','status'])
            ->make(true);
    }
}
