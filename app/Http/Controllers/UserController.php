<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function halamanRegister(){
        return view('pages.register');
    }

    public function simpanUser(Request $request){
        $data = [
            'name'=>$request->nama_lengkap,
            'email'=>$request->nik . '@gmail.com',
            'password'=>bcrypt($request->nik)
        ];

        User::create($data);
        return redirect('/login');
    }

}
