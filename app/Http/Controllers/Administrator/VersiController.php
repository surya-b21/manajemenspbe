<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Models\Versi;
use App\Models\Inovasi;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class VersiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // ladmin()->allow('administrator.kelola.versi.index');

        return view('vendor.ladmin.versi.index', ['id' => $id]);
    }

    public function getVersi($id)
    {
        return DataTables::of(DB::table('versi')->select('id','nama')->where('id_inovasi',$id))
        ->addIndexColumn()
        ->addColumn('aksi', function($item) {
            return view('ladmin::table.action', [
                'show' => [
                    'gate' => 'administrator.kelola.inovasi.versi.show',
                    'url' => route('administrator.kelola.inovasi.versi.show', [$item->id])
                  ],
                'edit' => [
                    'gate' => 'administrator.kelola.inovasi.versi.update',
                    'url' => route('administrator.kelola.inovasi.versi.edit', [$item->id])
                ],
                'destroy' => [
                    'gate' => 'administrator.kelola.inovasi.versi.destroy',
                    'url' => route('administrator.kelola.inovasi.versi.destroy', [$item->id]),
                ]
                ]);
        })
        ->rawColumns(['aksi'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // ladmin()->allow('administrator.kelola.inovasi.versi.create');

        return view('vendor.ladmin.versi.create', ['developer' => Developer::all(), 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ladmin()->allow('administrator.kelola.inovasi.versi.create');

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tgl_versi' => 'required',
            'id_dev' => 'required'

        ],
        [
            'required' => ':attribute harus diisi!!!'
        ]);

        try {
            Versi::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'tgl_versi' => $request->tgl_versi,
                'status' => 0,
                'id_inovasi' => $request->id_inovasi,
                'id_dev' => $request->id_dev,
                'create_by' => $request->user()->id,
                'update_by' => $request->user()->id,
            ]);

            session()->flash('success', [
                'Versi berhasil ditambahkan'
            ]);

            return redirect('/administrator/kelola/inovasi/versi/index/'.$request->id_inovasi);
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // ladmin()->allow('administrator.kelola.inovasi.versi.show');

        $data['versi'] = Versi::findOrFail($id);
        return view('vendor.ladmin.versi.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ladmin()->allow('administrator.kelola.inovasi.versi.update');

        $data['developer'] = Developer::all();
        $data['versi'] = Versi::findOrFail($id);
        $data['id'] = $id;
        return view('vendor.ladmin.versi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // ladmin()->allow('administrator.kelola.inovasi.versi.update');

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tgl_versi' => 'required',
            'id_dev' => 'required'

        ],
        [
            'required' => ':attribute harus diisi!!!'
        ]);

        try {
            $versi = Versi::findOrFail($id);
            $versi->nama = $request->nama;
            $versi->deskripsi = $request->deskripsi;
            $versi->id_inovasi = $request->id_inovasi;
            $versi->id_dev = $request->id_dev;
            $versi->update_by = $request->user()->id;
            $versi->save();

            session()->flash('success', [
                'Versi berhasil diperbarui'
            ]);

            return redirect('/administrator/kelola/inovasi/versi/index/'.$request->id_inovasi);
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // ladmin()->allow('admnistrator.kelola.inovasi.versi.destroy');

        try {
            $versi = Versi::findOrFail($id);
            $versi->delete();

            session()->flash('success', [
                'Versi berhasil dihapus'
            ]);

            return redirect()->back();
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}
