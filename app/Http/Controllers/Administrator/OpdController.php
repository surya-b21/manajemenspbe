<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\OpdDataTables;
use App\Http\Controllers\Controller;
use App\Models\Opd;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.account.opd.index');

        return OpdDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.account.opd.create');

        return view('vendor.ladmin.opd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.account.opd.create');

        $request->validate([
            'nama_opd' => ['required'],
            'email' => ['required'],
            'telepon' => ['required'],
            'alamat' => ['required']
        ],
        [
            'required' => ':attribute harus diisi!!'
        ]);

        try {
            Opd::create([
                'nama_opd' => $request->nama_opd,
                'email' => $request->email,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
                'create_by' => $request->user()->id,
                'update_by' => $request->user()->id,
            ]);

            session()->flash('success', [
                'OPD berhasil ditambahkan'
            ]);

            return redirect('/administrator/account/opd');
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
        return redirect()->route('administrator.account.opd.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.account.opd.update');

        $data['opd'] = Opd::findOrFail($id);
        return view('vendor.ladmin.opd.edit',$data);
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
        ladmin()->allow('administrator.account.opd.update');

        $request->validate([
            'nama_opd' => ['required'],
            'email' => ['required'],
            'telepon' => ['required'],
            'alamat' => ['required']
        ],
        [
            'required' => ':attribute harus diisi!!'
        ]);

        try {
            $opd = Opd::findOrFail($id);
            $opd->nama_opd = $request->nama_opd;
            $opd->email = $request->email;
            $opd->telepon = $request->telepon;
            $opd->alamat = $request->alamat;
            $opd->update_by = $request->user()->id;
            $opd->save();

            session()->flash('success', [
                'Data OPD berhasil diperbarui'
            ]);

            return redirect('/administrator/account/opd');
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
        ladmin()->allow('administrator.account.opd.destroy');

        try{
            $opd = Opd::findOrFail($id);
            $opd->delete();

            session()->flash('success', [
                'Data OPD berhasil dihapus'
            ]);

            return redirect('/administrator/account/opd');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}
