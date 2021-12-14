<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function requestToken(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('username', $request->username)->firstOrFail();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'username' => ['Username atau password tidak ada dalam database'],
            ]);
        }
        return $user->createToken($request->device_name)->plainTextToken;
    }

    public function deleteToken()
    {
        auth()->user()->tokens()->delete();

        return [
            "message" => "Token berhasil dihapus"
        ];
    }
    public function getID($username)
    {
        $user = User::select('id')->where('username', $username)->first();
        return $user;
    }

    public function register(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'alamat' => ['required', 'string', 'max:255'],
            'device_name' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'alamat' => $req->alamat
        ]);

        return $user->createToken($req->device_name)->plainTextToken;
    }
}
