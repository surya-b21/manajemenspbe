<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hexters\Ladmin\Exceptions\LadminException;
use App\DataTables\KategoriForumDataTables;
use App\Models\KategoriForum;

class KategoriForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.kelola.kategori-forum.index');

        return KategoriForumDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.kelola.kategori-forum.create');

        return view('vendor.ladmin.kategori-forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.kelola.kategori-forum.create');

        $request->validate(
            [
                'kategori' => ['required']
            ],
            [
                'required' => ':attribute harus diisi!!'
            ]
        );

        try {
            KategoriForum::create([
                'kategori' => $request->kategori,
                'create_by' => $request->user()->id,
                'update_by' => $request->user()->id,
            ]);
            session()->flash('success', [
                'Kategori Forum berhasil ditambahkan'
            ]);

            return redirect('/administrator/kelola/kategori-forum');
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
        return redirect()->route('administrator.kelola.kategori-forum.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.kategori-forum.update');

        $data['kategori'] = KategoriForum::findOrFail($id);
        return view('vendor.ladmin.kategori-forum.edit', $data);
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
        ladmin()->allow('administrator.kelola.kategori-forum.update');

        $request->validate(
            [
                'kategori' => ['required']
            ],
            [
                'required' => ':attribute harus diisi!!'
            ]
        );

        try {
            $kategori = KategoriForum::findOrFail($id);
            $kategori->kategori = $request->kategori;
            $kategori->update_by = $request->user()->id;
            $kategori->save();

            session()->flash('success', [
                'Update berhasil'
            ]);
            return redirect('/administrator/kelola/kategori-forum');
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
        ladmin()->allow('administrator.kelola.kategori-forum.destroy');

        try {
            $kategori = KategoriForum::findOrFail($id);
            $kategori->delete();

            session()->flash('success', [
                'Data berhasil dihapus'
            ]);
            return redirect('/administrator/kelola/kategori-forum');
        } catch (LadminException $e) {
        }
    }
}
