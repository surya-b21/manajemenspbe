<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;
use App\Models\Inovasi;
use Illuminate\Http\Request;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;


class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // ladmin()->allow('administrator.kelola.dokumen');

        // return DokumenDataTables::view();
        return view('vendor.ladmin.dokumen.index',['id' => $id]);
    }

    public function getDokumen($id)
    {
        return DataTables::of(DB::table('dokumen')->select('id','judul')->where('id_inovasi', $id))
            ->addIndexColumn()
            ->addColumn('aksi', function($docs) {
                return '<a href="#" class="btn btn-link">'.ladmin()->icon('eye').'</a> <a href="#">'.ladmin()->icon('trash').'</a>';
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
        // ladmin()->allow('administrator.kelola.dokumen.create');

        return view('vendor.ladmin.dokumen.create', compact('id'));
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

        $request->validate(
            [
                'judul' => 'required',
                'file_path' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus csv,txt,xlx,xls,pdf',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->judul . '.' . $request->file('file_path')->extension();
                $filePath = Storage::putFileAs('public/dokumen', $request->file('file_path'), $fileName);

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
        $inovasi = Inovasi::all();

        return view('vendor.ladmin.dokumen.edit', compact(['dokumen', 'inovasi']));
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

        $request->validate(
            [
                'judul' => 'required',
                'file_path' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus csv,txt,xlx,xls,pdf',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->judul . '.' . $request->file('file_path')->extension();
                $filePath = Storage::putFileAs('public/dokumen', $request->file('file_path'), $fileName);

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

            Storage::delete($dokumen->file_path);

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
