<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        return view("profil.profil", ['user' => $user]);
    }

    public function store(Request $request, $username)
    {
        $id = DB::table('users')->select('id')->where('username', $username)->get()->first();
        $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required',
                'email' => 'required',
                'alamat' => 'required',
            ]
        );

        if($request->file())
        {
            $fileName = $request->name . '.' . $request->file('poster_path')->extension();
            $filePath = Storage::putFileAs('public/user', $request->file('foto_path'), $fileName);

            DB::table('users')->where('id', $id->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'alamat' => $request->alamat,
                'foto_path' => $filePath
            ]);

            // $fileModel = USer::findOrFail($id);
            // $fileModel->name = $request->name;
            // $fileModel->username = $request->username;
            // $fileModel->password = $request->password;
            // $fileModel->email = $request->email;
            // $fileModel->alamat = $request->alamat;
            // $fileModel->foto_path = $filePath;
            // $fileModel->save();

            return redirect('/profil')->with('sukses', 'Berhasil Memperbarui Data');
        } else {
            DB::table('users')->where('id', $id->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'alamat' => $request->alamat,
            ]);

            return redirect('/profil')->with('sukses', 'Berhasil Memperbarui Data');
        }


    }

    public function getUser()
    {
        $user = DB::table('users')->select('name', 'username', 'email', 'alamat')->where('username', $_POST['username'])->get()->first();
        echo json_encode($user);
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([]);

    //     $process = User::findOrFail($id)->update(['foto_path' => $request->foto_path]);
    //     if ($process) {
    //         return redirect()->back()->with("success", "Data berhasil diperbarui");
    //     } else {
    //         return redirect()->back()->withInput()->withErrors("Terjadi kesalahan");
    //     }
    // }
}
