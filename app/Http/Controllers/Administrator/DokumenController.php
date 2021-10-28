<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\DokumenDataTables;
use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Inovasi;
use Illuminate\Http\Request;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.kelola.dokumen.index');

        return DokumenDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.kelola.dokumen.create');

        $inovasi = Inovasi::all();

        return view('vendor.ladmin.dokumen.create', compact('inovasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.kelola.dokumen.create');

        $request->validate([
            'judul' => 'required',
            'file_path' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ],
        [
            'required' => ':attribute harus diisi!!',
            'mimes' => 'format file harus csv,txt,xlx,xls,pdf',
            'max' => 'ukuran file maksimal 2MB'
        ]);

        try {
            if ($request->file()) {
                $fileName = $request->judul.'.'.$request->file('file_path')->extension();
                $filePath = Storage::putFileAs('public/dokumen',$request->file('file_path'),$fileName);

                $fileModel = new Dokumen;
                $fileModel->judul = $request->judul;
                $fileModel->file_path = $filePath;
                $fileModel->id_inovasi = $request->id_inovasi;
                $fileModel->create_by = $request->user()->id;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();

                session()->flash('success', [
                    'Dokumen berhasil ditambahkan'
                ]);

                return redirect('/administrator/kelola/dokumen');
            }
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
        ladmin()->allow('administrator.kelola.dokumen.show');

        $dokumen = Dokumen::findOrFail($id);

        return view('vendor.ladmin.dokumen.show', compact('dokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.dokumen.update');

        $dokumen = Dokumen::findOrFail($id);

        return view('vendor.ladmin.dokumen.edit', compact('dokumen'));
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
        ladmin()->allow('administrator.kelola.dokumen.update');

        $request->validate([
            'judul' => 'required',
            'file_path' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ],
        [
            'required' => ':attribute harus diisi!!',
            'mimes' => 'format file harus csv,txt,xlx,xls,pdf',
            'max' => 'ukuran file maksimal 2MB'
        ]);

        try {
            if ($request->file()) {
                $fileName = $request->judul.'.'.$request->file('file_path')->extension();
                $filePath = Storage::putFileAs('public/dokumen',$request->file('file_path'),$fileName);

                $fileModel = Dokumen::findOrFail($id);
                $fileModel->judul = $request->judul;
                $fileModel->file_path = $filePath;
                $fileModel->id_inovasi = $request->id_inovasi;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();

                session()->flash('success', [
                    'Dokumen berhasil diperbarui'
                ]);

                return redirect('/administrator/kelola/dokumen');
            }
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
        ladmin()->allow('administrator.kelola.dokumen.destroy');

        try {
            $dokumen = Dokumen::findOrFail($id);
            $dokumen->delete();

            session()->flash('success', [
                'Dokumen berhasil dihapus'
            ]);

            return redirect('/administrator/kelola/dokumen');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}
