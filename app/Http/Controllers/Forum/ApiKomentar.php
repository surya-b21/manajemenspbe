<?php

namespace App\Http\Controllers\Forum;

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
}
