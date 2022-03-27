<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function halamanRegister(){
        return view('pages.register');
    }

    public function simpanUser(Request $request){

        $request->validate([
             'nik' => 'required|unique:users,email',
             'nama_lengkap' => 'required'
         ],
         [
             'nik.unique' => 'NIK sudah terdaftar',
             'nama_lengkap.required' => 'Nama tidak boleh kosong'
        ]);


        $data = [
            'name'=>$request->nama_lengkap,
            'email'=>$request->nik,
            'password'=>bcrypt($request->nik)
        ];

        User::create($data);
        return redirect()->route('login')->with('registerSuccess', "Registrasi telah berhasil, silahkan login!");
    }

}
