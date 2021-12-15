<?php

namespace App\Http\Controllers\API\Forum;

use App\Models\Forum\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiForum extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return response()->json([
            "status" => true,
            "message" => "Kategori",
            "data" => $kategori
        ], 200);
    }
    public function showparent()
    {
        $kategori = Kategori::all()->where('parent', 0);
        return response()->json([
            'success' => true,
            'message' => 'Kategori',
            'data' => $kategori
        ], 200);
    }
    public function showchild($parent)
    {
        $kategori = Kategori::all()->where('parent', $parent);
        return response()->json([
            'success' => true,
            'message' => 'Kategori',
            'data' => $kategori
        ], 200);
    }
}
