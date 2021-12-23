<?php

namespace App\Http\Controllers\Administrator;

use App\DataTables\TopikForumDatatables;
use App\Http\Controllers\Controller;
use App\Models\TopikForum;
use App\Models\Forum\Kategori;
use App\Models\Opd;
use App\Models\User;
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
        $topik = TopikForum::all();
        $user = User::all();

        return view('vendor.ladmin.topik-forum.create', compact(['kategori_forum', 'topik', 'user']));
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
                'judul' => 'required',
                'isi' => 'required',
                'foto_path' => 'required|mimes:png,jpg,jpeg|max:2048',
                'id_user' => 'required',
                'id_kf' => 'required',
                'created_by' => 'required',
                'update_by' => 'required',
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus png,jpg,jpeg',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->judul . '.' . $request->file('foto_path')->extension();
                $filePath = Storage::putFileAs('public/forum', $request->file('foto_path'), $fileName);

                $fileModel = new TopikForum;
                $fileModel->judul = $request->judul;
                $fileModel->isi = $request->isi;
                $fileModel->foto_path = $filePath;
                $fileModel->id_user = $request->id_user;
                $fileModel->id_kf = $request->id_kf;
                $fileModel->create_by = $request->user()->id;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();
            }

            session()->flash('success', [
                'Data Topik Forum berhasil ditambahkan'
            ]);

            return redirect('/administrator/kelola/topik-forum');
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
        ladmin()->allow('administrator.kelola.topik-forum.show');

        $kategori_forum = Kategori::all();
        $user = User::all();
        $topik = DB::table('topik_forum')->where('id', $id)->get()->first();
        return view('vendor.ladmin.topik-forum.show', compact(['kategori_forum', 'user', 'topik']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ladmin()->allow('administrator.kelola.topik-forum.update');

        $kategori_forum = Kategori::all();
        $user = User::all();
        $topik = TopikForum::findOrFail($id);

        return view('vendor.ladmin.topik-forum.edit', compact(['kategori_forum', 'user', 'topik']));
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
        ladmin()->allow('administrator.kelola.topik-forum.update');

        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
                'foto_path' => 'required|mimes:png,jpg,jpeg|max:2048',
                'id_user' => 'required',
                'id_kf' => 'required',
                'created_by' => 'required',
                'update_by' => 'required',
            ],
            [
                'required' => ':attribute harus diisi!!',
                'mimes' => 'format file harus png,jpg,jpeg',
                'max' => 'ukuran file maksimal 2MB'
            ]
        );

        try {
            if ($request->file()) {
                $fileName = $request->judul . '.' . $request->file('foto_path')->extension();
                $filePath = Storage::putFileAs('public/forum', $request->file('foto_path'), $fileName);

                $fileModel = TopikForum::findOrFail($id);
                $fileModel->judul = $request->judul;
                $fileModel->isi = $request->isi;
                $fileModel->foto_path = $filePath;
                $fileModel->id_user = $request->id_user;
                $fileModel->id_kf = $request->id_kf;
                $fileModel->create_by = $request->user()->id;
                $fileModel->update_by = $request->user()->id;
                $fileModel->save();
            }

            session()->flash('success', [
                'Data Topik Forum berhasil diperbarui'
            ]);

            return redirect('/administrator/kelola/topik-forum');
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
        ladmin()->allow('administrator.kelola.topik-forum.destroy');

        try {
            $topik = TopikForum::findOrFail($id);
            $topik->delete();

            Storage::delete($topik->poster_path);

            session()->flash('success', [
                'Data Topik Forum berhasil dihapus'
            ]);

            return redirect('/administrator/kelola/topik-forum');
        } catch (LadminException $e) {
            return redirect()->back()->withErrors([
                $e->getMessage()
            ]);
        }
    }
}