<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\ElemenSmartDataTables;
use App\Http\Controllers\Controller;
use App\Models\ElemenSmart;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Http\Request;

class ElemenSmartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.konten.elemen-smart.index');
        // ladmin()->allow('administrator.konten.elemen-smart');

        return ElemenSmartDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.konten.elemen-smart.create');

        return view('vendor.ladmin.elemen-smart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.konten.elemen-smart.create');

        $request->validate([
            'element' => 'required',
            'deskripsi' => 'required'
        ],
        [
            'required' => ':attribute harus diisi!'
        ]);

        try {
            ElemenSmart::create([
                'element' => $request->element,
                'deskripsi' => $request->deskripsi
            ]);

            session()->flash('success', [
                'Element Smart berhasil ditambahkan'
            ]);

            return redirect('/administrator/konten/elemen-smart');
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
        return redirect()->route('administrator.konten.elemen-smart.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.konten.elemen-smart.update');

        $data['esmart'] = ElemenSmart::findOrFail($id);
        return view('vendor.ladmin.elemen-smart.edit', $data);
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
        ladmin()->allow('administrator.konten.elemen-smart.update');

        $request->validate([
            'element' => 'required',
            'deskripsi' => 'required'
        ],
        [
            'required' => ':attribute harus diisi!'
        ]);

        try {
            $esmart = ElemenSmart::findOrFail($id);
            $esmart->element = $request->element;
            $esmart->deskripsi = $request->deskripsi;
            $esmart->save();

            session()->flash('success', [
                'Update Element Smart berhasil'
            ]);

            return redirect('/administrator/konten/elemen-smart');
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
        ladmin()->allow('administrator.konten.elemen-smart.destroy');

        try {
            $esmart = ElemenSmart::findOrFail($id);
            $esmart->delete();

            session()->flash('success', [
                'Data Element Smart berhasil dihapus'
            ]);

            return redirect('/administrator/konten/elemen-smart');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}
