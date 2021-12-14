<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiUser extends Controller
{
    public function index()
    {
        $User = User::all('id', 'id_opd', 'name', 'alamat', 'email', 'username', 'password', 'foto_path');
        return response()->json([
            "status" => true,
            "message" => "User",
            "data" => $User
        ], 200);
    }
    public function showimage($id)
    {
        $User[] = User::all();
        $Us = User::all();
        $row = count($Us);
        for ($i = 0; $i < $row; $i++) {
            if ($User[0][$i]['id'] == $id) {
                return response()->file(public_path(
                    'storage/' . $User[0][$i]['foto_path']
                ));
            }
        }
    }
}
