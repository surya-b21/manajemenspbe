<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum\Topik;
use App\Models\Forum\Kategori;
use App\Models\Forum\Komentar;
use App\Models\User;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Storage;

class TopikController extends Controller
{
    protected $table = 'topik';

    public function index($id)
    {
        $data = Topik::where('id_kf', $id)->paginate(4);
        $topikpost = Topik::all();
        $data2 = Kategori::all();
        $data3 = User::all();
        $komen = Komentar::all();
        $hitung = count($data2);
        $categories = Kategori::with('children')->where('parent', 0)->get();

        $id = $id;
        $show = [
            'topik' => $data,
            'kf' => $data2,
            'id' => $id,
            'user' => $data3,
            'jumlahtopik' => $topikpost,
            'jumlahkomen' => $komen

        ];
        // return view("topik")->with(['topik' => $data]);
        // return view("topik", ['topik' => $data], ['kf' => $data2], ['id' => $id]);

        return view(
            "forum.topik",
            [
                'active' => 'forum',
                'tampil' => $show,
                'kategori' => $categories
            ]
        );
        // return response()->json($show['kf'][$id]['kategori']);
    }

    public function semua(Request $request)
    {
        $topikpost = Topik::paginate(5);
        $data2 = Kategori::all();
        // $data2 = $this->Kategori->joinTopik()->where('id_topik', $id);
        // ->where('id_ku', $id_jenis);
        $data3 = User::all();
        $komen = Komentar::all();
        $categories = Kategori::with('children')->where('parent', 0)->get();

        $title = '';
        $show = [
            'topik' => $topikpost,
            'kf' => $data2,
            'user' => $data3,
            'jumlahtopik' => $topikpost,
            'jumlahkomen' => $komen

        ];

        if (request('kategori')) {
            $kategori = Kategori::firstWhere('kategori', request('kategori'));
            $title = ' by ' . $kategori->kategori;
        }

        return view(
            'forum.topiks',
            [
                'title' => 'Semua Topik' . $title,
                'active' => 'forum',
                'tampil' => $show,
                'kategori' => $categories,
                'topiks' => Topik::latest()->filter(request(['search', 'kategori']))->paginate(6)->withQueryString()
                // ->get()
            ]
        );
    }
}
