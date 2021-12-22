<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forum\Topik;
use App\Models\Forum\Kategori;
use App\Models\User;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Storage;

class TopikController extends Controller
{
    protected $table = 'topik';

    public function index($id)
    {
        $data = Topik::all()->where('id_kf', $id);
        $data2 = Kategori::all();
        $data3 = User::all();
        $hitung = count($data2);
        $id = $id;
        $show = [
            'active' => 'forum',
            'topik' => $data,
            'kf' => $data2,
            'id' => $id,
            'user' => $data3

        ];
        // return view("topik")->with(['topik' => $data]);
        // return view("topik", ['topik' => $data], ['kf' => $data2], ['id' => $id]);

        return view(
            "forum.topik",
            [
                'active' => 'forum',
                'tampil' => $show,
            ],
            // [
            //     'topiks' => Topik::latest()->filter(request(['search']))->get()
            // ]
        );
        // return response()->json($show['kf'][$id]['kategori']);
    }

    function processAdd(Request $request)
    {
        $name = $request->file('foto_path')->store('/', 'public', time() . '' . $request->file('foto_path')->getClientOriginalExtension());
        topik::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'id_user' => $request->id_user,
            'foto_path' => $name,
            'id_kf' => $request->id_kf,
        ]);
        return redirect()->back();
    }

    // public function proses_upload(Request $request)
    // {
    //     // $this->validate($request, [
    //     // 	'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
    //     // 	'keterangan' => 'required',
    //     // ]);

    //     // menyimpan data file yang diupload ke variabel $file
    //     $file = $request->file('file');

    //     $nama_file = time() . "_" . $file->getClientOriginalName();

    //     // isi dengan nama folder tempat kemana file diupload
    //     $tujuan_upload = 'data_file';
    //     $file->move($tujuan_upload, $nama_file);

    //     Gambar::create([
    //         'file' => $nama_file,
    //         'keterangan' => $request->keterangan,
    //     ]);

    //     return redirect()->back();
    // }

    function delete($idtopik)
    {
        try {
            $process = topik::findOrFail($idtopik)->delete();
            if ($process) {
                return redirect()->back()->with("success");
            } else {
                return redirect()->back()->withErrors("Terjadi kesalahan");
            }
        } catch (\Exception $e) {
        }
    }

    public function update($idtopik)
    {
        $data = topik::findOrFail($idtopik);
        return view("forum.update", ['topik' => $data]);
    }

    public function processUpdate(Request $request, $idtopik)
    {
        $topik = topik::find($idtopik);
        $topik->judul = $request->input('judul');
        $topik->isi = $request->input('isi');
        $topik->id_user = $request->input('id_user');
        $topik->id_kf = $request->input('id_kf');
        if ($request->hasFile('foto_url')) {
            $filenameWithExt = $request->file('foto_url')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto_url')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;

            $name = $request->file('foto_url')->store('/', 'public', $filenameSimpan);
            $topik->foto_url = $name;
        }
        $topik->save();
        return redirect()->back();
    }

    public function semua()
    {
        $title = '';

        if (request('kategori')) {
            $kategori = Kategori::firstWhere('kategori', request('kategori'));
            $title = ' by ' . $kategori->name;
        }

        return view('forum.topiks', [
            'title' => 'Semua Topik' . $title,
            'active' => 'forum',
            'topiks' => Topik::latest()->filter(request(['search', 'kategori']))->paginate(20)->withQueryString()
            // ->get()
        ]);
    }

    public function detail(Topik $topik)
    {
        return view('topik', [
            'title' => 'Single Topik',
            'active' => 'forum',
            '$topik' => $topik
        ]);
    }
}
