<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum\Topik;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class ApiTopik extends Controller
{
    public function index()
    {
        $topik = Topik::all();
        return response()->json([
            "status" => true,
            "message" => "Topik",
            "data" => $topik
        ], 200);
    }
    public function showimage($id)
    {
        // $topik = Topik::all()->where('id', $id);
        $topik[] = Topik::all();
        $top = Topik::all();
        $row = count($top);
        for ($i = 0; $i < $row; $i++) {
            if ($topik[0][$i]['id'] == $id) {
                //  return ($topik[0][$i]['foto_path']);
                return response()->file(public_path(
                    'storage/' . $topik[0][$i]['foto_path']
                ));
            }
        }
        // return ($topik[0][$id]['foto_url']);

        // return response()->file(public_path(
        //     'storage/' . $topik[$index]['foto_url']
        // ));
    }
}
