<?php

namespace App\Http\Controllers\Administrator\Verifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Versi;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class VersiController extends Controller
{
    public function index()
    {
        return view('verifikasi.versi.index');
    }

    public function verified($id)
    {
        $versi = Versi::findOrFail($id);
        $versi->status = 1;
        $versi->save();

        return redirect()->route('administrator.verifikasi.versi.index')->with('sukses','Data berhasil di verifikasi');
    }

    public function unverify($id)
    {
        $versi = Versi::findOrFail($id);
        $versi->status = 0;
        $versi->save();

        return redirect()->route('administrator.verifikasi.versi.index')->with('sukses','Berhasil membatalkan verifikasi');
    }

    public function getData()
    {
        $query = DB::table('versi')->select('id','nama','status');

        return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('aksi', function($versi) {
                    if ($versi->status == 0) {
                        return '<a class="btn btn-success" href="'.route('administrator.verifikasi.versi.verified',$versi->id).'">Verifikasi</a>';
                    } else {
                        return '<a class="btn btn-danger" data-url="'.route('administrator.verifikasi.versi.unverify',$versi->id).'" id="batal-verif">Batal Verifikasi</a>';
                    }
                })
                ->editColumn('status', function($versi) {
                    if ($versi->status == 0) {
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
