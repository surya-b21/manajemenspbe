<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\DeveloperDataTables;
use App\Http\Controllers\Controller;
use Hexters\Ladmin\Exceptions\LadminException;
use Illuminate\Http\Request;
use App\Models\Developer;
use Illuminate\Support\Facades\Storage;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ladmin()->allow('administrator.kelola.developer.index');

        return DeveloperDataTables::view();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ladmin()->allow('administrator.kelola.developer.create');

        return view('vendor.ladmin.developer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ladmin()->allow('administrator.kelola.developer.create');

        $request->validate([
            'nama_dev' => 'required',
            'alamat_dev' => 'required',
            'npwp_dev' => 'required',
            'telepon_dev' => 'required',
            'foto_dev_path' => 'required|mimes:png,jpg,jpeg|max:2048'
        ],
        [
            'required' => ':attribute harus diisi!!',
            'mimes' => 'format file harus png,jpg,jpeg',
            'max' => 'ukuran file maksimal 2MB'
        ]);

        try {
            if ($request->file())
            {
                $fileName = $request->nama_dev.'_'.$request->npwp_dev.'.'.$request->file('foto_dev_path')->extension();
                $filePath = Storage::putFileAs('public/developer',$request->file('foto_dev_path'),$fileName);

                $fileModel = new Developer;
                $fileModel->nama_dev = $request->nama_dev;
                $fileModel->alamat_dev = $request->alamat_dev;
                $fileModel->npwp_dev = $request->npwp_dev;
                $fileModel->telepon_dev = $request->telepon_dev;
                $fileModel->foto_dev_path = $filePath;
                $fileModel->save();

                session()->flash('success', [
                    'Data Developer berhasil ditambahkan'
                ]);

                return redirect('/administrator/kelola/developer');
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
        ladmin()->allow('administrator.kelola.developer.show');

        $data['developer'] = Developer::findOrFail($id);
        return view('vendor.ladmin.developer.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.developer.update');

        $data['developer'] = Developer::findOrFail($id);
        return view('vendor.ladmin.developer.edit', $data);
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
        ladmin()->allow('administrator.kelola.developer.update');

        $request->validate([
            'nama_dev' => 'required',
            'alamat_dev' => 'required',
            'npwp_dev' => 'required',
            'telepon_dev' => 'required',
            'foto_dev_path' => 'required|mimes:png,jpg,jpeg|max:2048'
        ],
        [
            'required' => ':attribute harus diisi!!',
            'mimes' => 'format file harus png,jpg,jpeg',
            'max' => 'ukuran file maksimal 2MB'
        ]);

        try {
            if ($request->file())
            {
                $fileName = $request->nama_dev.'_'.$request->npwp_dev.'.'.$request->file('foto_dev_path')->extension();
                $filePath = Storage::putFileAs('public/developer',$request->file('foto_dev_path'),$fileName);

                $fileModel = Developer::findOrFail($id);
                $fileModel->nama_dev = $request->nama_dev;
                $fileModel->alamat_dev = $request->alamat_dev;
                $fileModel->npwp_dev = $request->npwp_dev;
                $fileModel->telepon_dev = $request->telepon_dev;
                $fileModel->foto_dev_path = $filePath;
                $fileModel->save();

                session()->flash('success', [
                    'Data Developer berhasil diperbarui'
                ]);

                return redirect('/administrator/kelola/developer');
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
        ladmin()->allow('administrator.kelola.developer.destroy');

        try {
            $developer = Developer::findOrFail($id);
            $developer->delete();

            session()->flash('success', [
                'Data Developer berhasil dihapus'
            ]);

            return redirect('/administrator/kelola/developer');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }

    }
}
