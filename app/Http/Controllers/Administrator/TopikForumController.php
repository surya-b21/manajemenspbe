<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\TopikForumDatatables;
use App\Http\Controllers\Controller;
use App\Models\TopikForum;
use App\Models\Forum\Kategori;
use App\Models\Opd;
use App\Models\RefInovasiEsmart;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TopikForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.kelola.topik-forum.index');

        return TopikForumDatatables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.kelola.topik-forum.create');

        $kategori_forum = Kategori::all();
        // $esmart = DB::table('elemen_smart')->select('element')->get()->toArray();
        $opd = Opd::all();

        // $value_esmart = [];
        // $arrEM = [];
        // $index = 0;
        // foreach ($esmart as $data) {
        //     $arrEM[$index] = $data->element;
        //     $index++;
        // }

        return view('vendor.ladmin.topik-forum.create', compact(['kategori_umum', 'opd', 'arrEM', 'value_esmart']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.kelola.topik-forum.create');

        $request->validate(
            [
                'nama' => 'required',
                'deskripsi' => 'required',
                'layanan_spbe' => 'required',
                'tgl_launching' => 'required',
                'tgl_upload' => 'required',
                'poster_path' => 'required|mimes:png,jpg,jpeg|max:2048',
                'esmart' => 'required',
                'id_opd' => 'required',
                'id_ku' => 'required',
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus png,jpg,jpeg',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->nama . '.' . $request->file('poster_path')->extension();
                $filePath = Storage::putFileAs('public/forum', $request->file('poster_path'), $fileName);

                $fileModel = new TopikForum;
                $fileModel->judul = $request->judul;
                $fileModel->deskripsi = $request->deskripsi;
                $fileModel->layanan_spbe = $request->layanan_spbe;
                $fileModel->tgl_launching = $request->tgl_launching;
                $fileModel->tgl_upload = $request->tgl_upload;
                $fileModel->poster_path = $filePath;
                $fileModel->status = 0;
                $fileModel->id_ku = $request->id_ku;
                $fileModel->id_opd = $request->id_opd;
                $fileModel->create_by = $request->user()->id;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();
            }

            $temp = json_decode($request->esmart);
            $inovasi = DB::table('inovasi')->whereRaw('inovasi.id = (SELECT MAX(inovasi.id) FROM inovasi)')->first();
            foreach ($temp as $data) {
                $esmart = new RefInovasiEsmart;
                is_null($inovasi) ? $esmart->id_inovasi = 1 : $esmart->id_inovasi = $inovasi->id;
                $esmart_id = DB::table('elemen_smart')->select('id')->where('element', $data->value)->first();
                $esmart->id_esmart = $esmart_id->id;
                $esmart->create_by = $request->user()->id;
                $esmart->update_by = $request->user()->id;
                $esmart->save();
            }
            session()->flash('success', [
                'Data Inovasi berhasil ditambahkan'
            ]);

            return redirect('/administrator/kelola/inovasi');
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
        ladmin()->allow('administrator.kelola.inovasi.show');

        $inovasi = DB::table('inovasi')->where('id', $id)->get()->first();
        $esmart = DB::table('ref_inovasi_esmart')->where('id_inovasi', $id)->get()->toArray();
        return view('vendor.ladmin.inovasi.show', compact(['inovasi', 'esmart']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.inovasi.update');

        $kategori_forum = Kategori::all();
        $topik = TopikForum::findOrFail($id);
        $esmart = DB::table('elemen_smart')->select('element')->get()->toArray();
        $ref_esmart = DB::table('ref_inovasi_esmart')->select('id_esmart')->where('id_inovasi', $id)->get();
        $opd = Opd::all();

        $value_esmart = [];
        $index = 0;
        foreach ($ref_esmart as $data) {
            $value_esmart[$index] = DB::table('elemen_smart')->select('element')->where('id', $data->id_esmart)->first();
            $index++;
        }

        $index = 0;
        foreach ($value_esmart as $data) {
            $value_esmart[$index] = $data->element;
            $index++;
        }

        $arrEM = [];
        $index = 0;
        foreach ($esmart as $data) {
            $arrEM[$index] = $data->element;
            $index++;
        }

        return view('vendor.ladmin.inovasi.edit', compact(['kategori_umum', 'opd', 'arrEM', 'inovasi', 'value_esmart']));
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
        ladmin()->allow('administrator.kelola.inovasi.update');

        $request->validate(
            [
                'nama' => 'required',
                'deskripsi' => 'required',
                'layanan_spbe' => 'required',
                'tgl_launching' => 'required',
                'tgl_upload' => 'required',
                'poster_path' => 'required|mimes:png,jpg,jpeg|max:2048',
                'esmart' => 'required',
                'id_ku' => 'required',
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus png,jpg,jpeg',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->nama . '_' . $request->file('poster_path')->extension();
                $filePath = Storage::putFileAs('public/inovasi', $request->file('poster_path'), $fileName);

                $fileModel = Inovasi::findOrFail($id);
                $fileModel->nama = $request->nama;
                $fileModel->deskripsi = $request->deskripsi;
                $fileModel->layanan_spbe = $request->layanan_spbe;
                $fileModel->tgl_launching = $request->tgl_launching;
                $fileModel->tgl_upload = $request->tgl_upload;
                $fileModel->poster_path = $filePath;
                $fileModel->status = 0;
                $fileModel->id_ku = $request->id_ku;
                $fileModel->id_opd = $request->id_opd;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();
            }

            $temp = json_decode($request->esmart);
            $inovasi = DB::table('inovasi')->whereRaw('inovasi.id = (SELECT MAX(inovasi.id) FROM inovasi)')->first();
            foreach ($temp as $data) {
                $esmart = RefInovasiEsmart::findOrFail($id);
                is_null($inovasi) ? $esmart->id_inovasi = 1 : $esmart->id_inovasi = $inovasi->id;
                $esmart_id = DB::table('elemen_smart')->select('id')->where('element', $data->value)->first();
                $esmart->id_esmart = $esmart_id->id;
                $esmart->update_by = $request->user()->id;
                $esmart->save();
            }

            session()->flash('success', [
                'Data Inovasi berhasil diperbarui'
            ]);

            return redirect('/administrator/kelola/inovasi');
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
        ladmin()->allow('administrator.kelola.inovasi.destroy');

        try {
            $inovasi = Inovasi::findOrFail($id);
            $inovasi->delete();

            Storage::delete($inovasi->poster_path);

            DB::table('ref_inovasi_esmart')->select('*')->where('id_inovasi', $inovasi->id)->delete();

            session()->flash('success', [
                'Data Inovasi berhasil dihapus'
            ]);

            return redirect('/administrator/kelola/inovasi');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}