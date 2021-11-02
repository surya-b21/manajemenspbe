<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum\Komentar;
use App\Models\Forum\Topik;

class KomentarController extends Controller
{
    public function show($id)
    {
        $data = Topik::all()->where('id', $id);
        $data2 = Komentar::all()->where('id_topik', $id);
        return view(
            "forum.komentar",
            [
                'active' => 'forum',
                'topik' => $data
            ],
            ['komentar' => $data2]
        );
    }

    function processAdd(Request $request)
    {
        $inserting = Komentar::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }

    function delete($idkomen)
    {
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