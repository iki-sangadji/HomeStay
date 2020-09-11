<?php

namespace App\Http\Controllers;

use App\FasilitasKamar;
use Illuminate\Http\Request;

class FasilitasKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitasKamar = FasilitasKamar::all();
        return view('kamar.fasilitasKamar')->with('fasilitasList',$fasilitasKamar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitasKamar= new FasilitasKamar;
        $fasilitasKamar->nama=$request->input('nama');
        $fasilitasKamar->save();
        return back()->with('message','Fasilitas berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $fasilitasKamar= FasilitasKamar::find($id);
        $fasilitasKamar->nama=$request->input('nama');
        $fasilitasKamar->save();
        return back()->with('message','Fasilitas berhasil diubah');
    }

    public function destroy( $id)
    {
        $fasilitasKamar= FasilitasKamar::find($id);
        $fasilitasKamar->delete();
        return back()->with('message','Fasilitas berhasil dihapus');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function show(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    public function edit(FasilitasKamar $fasilitasKamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FasilitasKamar  $fasilitasKamar
     * @return \Illuminate\Http\Response
     */
    
}
