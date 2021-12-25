<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum\Kategori;
use App\Models\Forum\Topik;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    protected $table = 'kategori';

    public function index()
    {
        $data = Kategori::all();
        return view("forum.kategori")->with([
            'active' => 'forum',
            'kategori' => $data
        ]);
    }
    public function allCategories()
    {
        $categories = Kategori::with('children')->where('parent', 0)->get();
        $penulis = User::all();
        $post = Topik::all();
        // return response()->json(count($categories), 200);
        $keluarga = [
            'ibu' => [$categories[0]['kategori']], //0,1],
            'anak' => [$categories[0]['children'][0]['kategori']]
        ];
        $ibu = $categories[0]['kategori']; //0,1
        $anak = $categories[0]['children'][0]['kategori']; //0,1 ; 0,1

        return view("forum.kategori")->with([
            'active' => 'forum',
            'kategori' => $categories,
            'penulis' => $penulis,
            'jumlahtopik' => $post
        ]);
        // return response()->json($keluarga, 200);
    }
}
