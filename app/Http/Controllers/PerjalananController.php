<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller{

    public function index(){
        if(is_null(auth()->user())){
            return redirect()->route('login');
        }

        $data = DB::table('perjalanans')
        ->join('users', 'users.id', 'perjalanans.id_user')
        ->select('users.email', 'perjalanans.*')
        ->where('users.name', '=', auth()->user()->name)
        ->get();

        return view('pages.dashboard.data', ['data' => $data->reverse()]);
    }

    public function simpanPerjalanan(Request $request){
        $data = [
            'id_user'=>1,
            'tanggal'=>$request->datetime,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];

        Perjalanan::create($data);
        return redirect()->route('input')->with('status', 'Data tersimpan');
    }

}
