<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){

        $data = Kendaraan::all();
        return view('datakendaraan', compact('data'));
    }
    
    public function viewkendaraan(){

        $data = Kendaraan::all();
        return view('viewkendaraan', compact('data'));
    }

    public function tambahdatakendaraan(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Kendaraan::create($request->all());
        return redirect()->route('Kendaraan')->with('success',' Data Berhasil Ditambahkan');
    }
    
    public function tampilkandata($id){
        $data = Kendaraan::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }
    
    public function updatedata(Request $request, $id){
        $data = Kendaraan::find($id);
        $data->update($request->all());
        return redirect()->route('Kendaraan')->with('success',' Data Berhasil Diupdate');
        
    }
    
    public function delete($id){
        $data = Kendaraan::find($id);
        $data->delete();
        return redirect()->route('Kendaraan')->with('success',' Data Berhasil Dihapus');

    }
}
