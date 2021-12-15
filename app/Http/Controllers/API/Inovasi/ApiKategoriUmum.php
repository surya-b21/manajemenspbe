<?php

namespace App\Http\Controllers\API\Inovasi;

use App\Models\Inovasi\kategori_umum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiKategoriUmum extends Controller
{
    public function index()
    {
        $kategori_umum = kategori_umum::all();
        return response()->json([
            "status" => true,
            "message" => "Kategori_Umum",
            "data" => $kategori_umum
        ], 200);
    }
}
