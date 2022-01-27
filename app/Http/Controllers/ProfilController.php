<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        return view("profil.profil", ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $process = User::findOrFail($id)->update(['foto_path' => $request->foto_path]);
        if ($process) {
            return redirect()->back()->with("success", "Data berhasil diperbarui");
        } else {
            return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
        }
    }
}
