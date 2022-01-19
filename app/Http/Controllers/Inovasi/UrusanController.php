<?php

namespace App\Http\Controllers\Inovasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Inovasi\kategori_smart;
use App\Models\Inovasi\kategori_umum;
use App\Models\User;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Storage;

class UrusanController extends Controller
{
    protected $table = 'kategori_umum';

    public function index($id)
    {
        $data = kategori_umum::where('id', $id)->get();


        $id = $id;
        $show = [
            'urusan' => $data,

        ];
        return view(
            "inovasi.urusan",
            [
                'active' => 'inovasi',
                'urusan' => $data
            ]
        );
    }
}
