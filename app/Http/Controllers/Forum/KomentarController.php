<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum\Topik;
use Illuminate\Http\Request;
use App\Models\Forum\Komentar;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{
    public function __construct()
    {
        $this->Komentar = new Komentar();
    }

    public function show($id)
    {
        $id = decrypt($id);
        $data = Topik::all()->where('id', $id);
        $data2 = $this->Komentar->joinUser()->where('id_topik', $id);
        $data3 = User::all();
        // $data2 = Komentar::all()->where('id_topik', $id);
        return view(
            "forum.komentar",
            [
                'active' => 'forum',
                'topik' => $data,
                'komentar' => $data2,
                'user' => $data3
            ],
        );
    }

    function processAdd(Request $request)
    {
        $id_user = Auth::user()->id;
        $inserting = Komentar::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    function delete($idkomen)
    {
        $idkomen = decrypt($idkomen);
        try {
            $process = Komentar::findOrFail($idkomen)->delete();
            if ($process) {
                return redirect()->back()->with("success");
            } else {
                return redirect()->back()->withErrors("Terjadi kesalahan");
            }
        } catch (\Exception $e) {
        }
    }

    public function update($idkomen)
    {
        $idkomen = decrypt($idkomen);
        $data = Komentar::findOrFail($idkomen);
        return view("forum.update_komentar", [
            'active' => 'forum',
            'komentar' => $data
        ]);
    }

    public function processUpdate(Request $request, $idkomen)
    {
        $request->validate([]);

        $process = Komentar::findOrFail($idkomen)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }
}
