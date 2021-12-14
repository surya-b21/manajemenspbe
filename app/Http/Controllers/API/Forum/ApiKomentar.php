<?php

namespace App\Http\Controllers\API\Forum;

use App\Models\Forum\Komentar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiKomentar extends Controller
{
    public function index()
    {
        $komentar = Komentar::all();
        return response()->json([
            "status" => true,
            "message" => "Kategori",
            "data" => $komentar
        ], 200);
    }
    public function add(Request $req)
    {
        $komentar = new Komentar;
        $komentar->isi = $req->isi;
        $komentar->id_user =  $req->id_user;
        $komentar->id_topik = $req->id_topik;
        $komentar->create_by = 1;
        $komentar->update_by = 1;
        $komentar->created_at = date("Y-m-d");
        $komentar->updated_at = date("Y-m-d");

        $result = $komentar->save();
        if ($result) {
            return ["Data berhasil ditambahkan"];
        } else {
            return ["Data tidak berhasil ditambahkan"];
        }
    }
    public function update(request $req)
    {
        $komentar = Komentar::find($req->id);
        $komentar->isi = $req->isi;
        $komentar->id_user = 1;
        $komentar->id_topik = $req->id_topik;
        $komentar->create_by = 1;
        $komentar->update_by = 1;
        $komentar->created_at = date("Y-m-d");
        $komentar->updated_at = date("Y-m-d");
        $result = $komentar->save();
        if ($result) {
            return ["Data " . $req->id . " telah diubah"];
        } else {
            return ["Data " . $req->id . " tidak bisa diubah"];
        }
    }
    public function delete($id)
    {
        $komentar = Komentar::find($id);
        $result = $komentar->delete();
        if ($result) {
            return ["Data " . $id . " telah dihapus"];
        } else {
            return ["Data " . $id . " tidak bisa dihapus"];
        }
    }
}
