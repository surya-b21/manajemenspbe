<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    protected $table = 'users';

    public function update(Request $request, $id)
    {
        // $h = auth()->user();
        // $h['id'] = $id;
        $topik = User::all()->where('id', $id);
        // $topik->name = $request->input('name');
        // $topik->username = $request->input('username');
        // $topik->alamat = $request->input('alamat');
        // $topik->email = $request->input('email');
        if ($request->hasFile('foto_path')) {
            $name = $request->file('foto_path')->store('/', 'public',  time() . '' . $request->file('foto_path')->getClientOriginalExtension());
            $topik->foto_path = $name;
        }
        $topik->save();
        return redirect()->back();
    }
}
