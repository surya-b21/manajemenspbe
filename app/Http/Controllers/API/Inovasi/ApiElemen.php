<?php

namespace App\Http\Controllers\API\Inovasi;

use App\Models\Inovasi\ref_inovasi_esmart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiElemen extends Controller
{
    public function index()
    {
        $inosmart = ref_inovasi_esmart::joinin();
        return response()->json([
            "status" => true,
            "message" => "ref_inovasi_esmart",
            "data" => $inosmart
        ], 200);
    }
}
