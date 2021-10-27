<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum\kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    protected $table = 'kategori';
    public function index()
    {
        $data = kategori::all();
        return view("template2.kategori")->with(['kategori' => $data]);
    }
    public function allCategories()
    {
        $categories = kategori::with('children')->where('parent', 0)->get();

        // return response()->json(count($categories), 200);
        $keluarga = [
            'ibu' => [$categories[0]['kategori']], //0,1],
            'anak' => [$categories[0]['children'][0]['kategori']]
        ];
        $ibu = $categories[0]['kategori']; //0,1
        $anak = $categories[0]['children'][0]['kategori']; //0,1 ; 0,1

        return view("template2.kategori")->with(['kategori' => $categories]);
        // return response()->json($keluarga, 200);
    }
}
