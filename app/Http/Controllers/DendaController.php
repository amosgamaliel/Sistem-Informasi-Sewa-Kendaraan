<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denda;

class DendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dendas = Denda::all();
        //dd($data);
        return view('denda.index', compact('dendas'));
    }

    public function tambahdenda(){
        $dendas =  Denda::all();
            return view('denda.tambahdata', compact ('dendas'));
    }

    public function simpandata(Request $request){
        //dd($request->all());
            Denda::create($request->all());
           // denda::create($request->expect(['token','submit']));
            return redirect()->route('denda.create');
    }
    

    /** 
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dendas = Denda::find($id);
        // denda::create($request->expect(['token','submit']));
         return  view('denda.editdatadenda', compact ('dendas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Denda::find($id);
        $data->update($request->all());

        // dd($data);
        return redirect()->route('denda.create')->with('success',' Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
