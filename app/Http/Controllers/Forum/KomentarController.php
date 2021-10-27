<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum\komentar;
use App\Models\Forum\topik;

class KomentarController extends Controller
{
    public function show($id)
    {
        $data = topik::all()->where('id', $id);
        $data2 = komentar::all()->where('id_topik', $id);
        return view("template2.komentar", ['topik' => $data], ['komentar' => $data2]);
    }
    function processAdd(Request $request)
    {
        $inserting = komentar::create($request->except('_token'));
        if ($inserting) {
            return redirect()->back()->with("success", "Data berhasil ditambahkan");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }
    function delete($idkomen)
    {
        try {
            $process = komentar::findOrFail($idkomen)->delete();
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
        $data = komentar::findOrFail($idkomen);
        return view("template2.update_komentar", ['komentar' => $data]);
    }

    public function processUpdate(Request $request, $idkomen)
    {
        $request->validate([]);

        $process = komentar::findOrFail($idkomen)->update($request->except('_token'));
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }
}
