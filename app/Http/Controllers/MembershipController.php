<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function create(){

        $data = Membership::all();
        return view('pelanggan.datamembership',['data' => $data]);
    }
    public function tambahmembership(){
        return view('pelanggan.tambahmembership');
    }
    public function insert(Request $request){
        //dd($request->all());
        $data = Membership::create($request->all());
        return redirect()->route('datamembership',compact('data'));
    }
}
