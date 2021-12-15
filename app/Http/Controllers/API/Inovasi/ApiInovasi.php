<?php

namespace App\Http\Controllers\API\Inovasi;

use App\Models\Inovasi\inovasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiInovasi extends Controller
{
    public function index()
    {
        $Inovasi = Inovasi::all();
        return response()->json([
            "status" => true,
            "message" => "inovasi",
            "data" => $Inovasi
        ], 200);
    }
    public function showimage($id)
    {
        $Inovasi[] = Inovasi::all();
        $ino = Inovasi::all();
        $row = count($ino);
        for ($i = 0; $i < $row; $i++) {
            if ($Inovasi[0][$i]['id'] == $id) {
                //  return ($Inovasi[0][$i]['foto_path']);
                return response()->file(public_path(
                    'storage/' . $Inovasi[0][$i]['poster_path']
                ));
            }
        }
    }
}
