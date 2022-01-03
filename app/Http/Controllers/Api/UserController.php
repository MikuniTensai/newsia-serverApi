<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (password_verify($request->password, $user->password)) {
                return response()->json([
                    'success' => 1,
                    'message' => 'Berhasil login',
                    'user'    => $user
                ]);
            }
            return $this->error('Password salah');
        }
        return $this->error('Email tidak terdaftar');
    }

    public function register(Request $request){
        $validasi = Validator::make($request->all(),[
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'password'  => 'required|min:6|max:16',
            'phone'     => 'required'
        ]);
        if ($validasi->fails()) {
            $val = $validasi->errors()->all();
            return $this->error($val[0]);
        }
        $user = User::create(array_merge($request->all(),[
            'password' => bcrypt($request->password)
        ]));
        if ($user) {
            return response()->json([
                'success' => 1,
                'message' => 'Selamat datang Register Berhasil',
                'user' => $user
            ]);
        }
        return $this->error('Register gagal');
    }

    public function error($message){
        return response()->json([
            'success' => 0,
            'message' => $message
        ]);
    }

}
