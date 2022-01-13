<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
class UpdataInformationController extends Controller
{

    public function edit()
    {
        return view('profil.edit');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['string', 'min:3', 'max:191', 'required'],
            'username' =>['required', 'alpha_num'],
            'email' => ['email', 'string', 'min:3', 'max:191', 'required'],
            'name' => ['string', 'min:3', 'max:191', 'required'],
            'alamat' => ['string', 'min:3', 'max:191', 'required'],
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return back()->with('message', 'Your Profile has been updated');

        
    }

}
