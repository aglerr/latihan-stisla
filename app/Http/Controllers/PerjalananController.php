<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerjalananController extends Controller{

    public function index(){
        if(is_null(auth()->user())){
            return redirect()->route('login');
        }

        $data = DB::table('perjalanans')
        ->join('users', 'users.id', 'perjalanans.id_user')
        ->select('users.email', 'perjalanans.*')
        ->where('users.id', '=', auth()->user()->id)
        ->get();

        return view('pages.dashboard.data', ['data' => $data->reverse()]);
    }

    public function simpanPerjalanan(Request $request){
        $data = [
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->date,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];

        Perjalanan::create($data);
        return redirect()->route('input')->with('status', 'Data tersimpan');
    }

}
