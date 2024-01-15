<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function create(Request $request){

        if($request->has('search')){
            $data = Membership::where('nama','like','%' .$request->cari.'%')->paginate(4);
        }else{
            $data = Membership::paginate(4);
        }

        $data = Membership::paginate(4);
        return view('pelanggan.datamembership',['data' => $data]);
    }
    public function tambahmembership(){
        return view('pelanggan.tambahmembership')->with('toast_success', 'Berhasil Berlangganan');
    }
    public function insert(Request $request){
        //dd($request->all());
        $data = Membership::create($request->all());
        return redirect()->route('datamembership',compact('data'));
    }
    public function hapus($id){
        $data = Membership::find($id);
        $data->hapus();
        return redirect()->route('datamembership')->with('toast_success', 'Berhasil Dihapus');
    }
}
