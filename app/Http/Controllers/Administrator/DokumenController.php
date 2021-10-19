<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\DokumenDataTables;
use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use Illuminate\Http\Request;
use Hexters\Ladmin\Exceptions\LadminException;

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

        return view('vendor.ladmin.dokumen.create');
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
            // 'file_url' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ],
        [
            'required' => ':attribute harus diisi!!',
            'mimes' => 'format file harus csv,txt,xlx,xls,pdf',
            'max' => 'ukuran file maksimal 2MB'
        ]);

        try {
            if ($request->file()) {
                $fileName = time().'_'.$request->file_url->getClientOriginalName();
                $filePath = $request->file('file_url')->storeAs('uploads', $fileName, 'public');

                $fileModel = new Dokumen;
                $fileModel->judul = time().'_'.$request->file_url->getClientOriginalName();
                $fileModel->file_url = '/storage/' . $filePath;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
