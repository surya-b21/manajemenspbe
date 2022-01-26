<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hexters\Ladmin\Exceptions\LadminException;
use App\DataTables\KategoriUmumDataTables;
use App\Models\ElemenSmart;
use App\Models\KategoriUmum;
use App\Models\Opd;

class KategoriUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.kelola.kategori-umum.index');

        return KategoriUmumDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.kelola.kategori-umum.create');

        $data['esmart'] = ElemenSmart::all();
        $data['opd'] = Opd::all();

        return view('vendor.ladmin.kategori-umum.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.kelola.kategori-umum.create');

        $request->validate(
            [
                'kategori' => 'required',
                'jenis_urusan' => 'required',
                'id_opd' => 'required',
                'id_smart' => 'required'
            ],
            [
                'required' => ':attribute harus diisi!!'
            ]
        );

        try {
            KategoriUmum::create([
                'kategori' => $request->kategori,
                'jenis_urusan' => $request->jenis_urusan,
                'id_smart' => $request->id_smart,
                'id_opd' => $request->id_opd,
                'create_by' => $request->user()->id,
                'update_by' => $request->user()->id,
            ]);
            session()->flash('success', [
                'Kategori Umum berhasil ditambahkan'
            ]);

            return redirect('/administrator/kelola/kategori-umum');
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
        return redirect()->route('administrator.kelola.kategori-umum.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.kategori-umum.update');
        $data['esmart'] = ElemenSmart::all();
        $data['opd'] = Opd::all();
        $data['kategori'] = KategoriUmum::findOrFail($id);
        return view('vendor.ladmin.kategori-umum.edit', $data);
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
        ladmin()->allow('administrator.kelola.kategori-umum.update');

        $request->validate(
            [
                'kategori' => 'required',
                'jenis_urusan' => 'required',
                'id_opd' => 'required',
                'id_smart' => 'required'
            ],
            [
                'required' => ':attribute harus diisi!!'
            ]
        );

        try {
            $kategori = KategoriUmum::findOrFail($id);
            $kategori->kategori = $request->kategori;
            $kategori->jenis_urusan = $request->jenis_urusan;
            $kategori->id_smart = $request->id_smart;
            $kategori->id_opd = $request->id_opd;
            $kategori->update_by = $request->user()->id;
            $kategori->save();

            session()->flash('success', [
                'Update berhasil'
            ]);
            return redirect('/administrator/kelola/kategori-umum');
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
        ladmin()->allow('administrator.kelola.kategori-umum.destroy');

        try {
            $kategori = KategoriUmum::findOrFail($id);
            $kategori->delete();

            session()->flash('success', [
                'Data berhasil dihapus'
            ]);
            return redirect('/administrator/kelola/kategori-umum');
        } catch (LadminException $e) {
        }
    }
}
