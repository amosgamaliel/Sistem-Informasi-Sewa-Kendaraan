<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function create(){

        $data = Pelanggan::all();
        return view('pelanggan.data-pelanggan', compact('data'));
    }
    public function tambahpelanggan(){
        return view('pelanggan.tambahpelanggan');
    }
    public function insertdata(Request $request){
        //dd($request->all());
        Pelanggan::create($request->all());
        return redirect()->route('pelanggan')->with('toast_success', 'Pelanggan Berhasil Ditambahkan!');
    }
    public function tampilkandata($id){
        $data = Pelanggan::find($id);
       // dd($data);
       return view('pelanggan.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pelanggan::find($id);
        $data->update($request->all());
        return redirect()->route('pelanggan')->with('toast_succes','Pelanggan Berhasil Dirubah');
    }
    public function delete($id){
        $data = Pelanggan::find($id);
        $data->delete();
        return redirect()->route('pelanggan')->with('toast_succes', 'Pelanggan Berhasil Dihapus');
    }
    
}
