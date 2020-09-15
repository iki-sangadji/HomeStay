<?php

namespace App\Http\Controllers;

use App\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar=Kamar::all();
        return view('kamar.detailKamar')->with('kamarList', $kamar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kamar.tambahKamar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image',
        ]);
        $kamar= new Kamar;
        $kamar->nama= $request->input('nama');
        $kamar->deskripsi= $request->input('deskripsi');
        if($request->has('image')){
            $kamar->gambar=$request->image->store('uploads','public');
        } else { 
            $kamar->gambar='';
        }
        $kamar->save();
        return redirect('/kamar')->with('message','Kamar berhasil ditambah');
    }

    public function edit( $id)
    {
        $kamar= Kamar::find($id);
        return view('kamar.ubahKamar')->with('kamar',$kamar);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image'=>'image',
        ]);
        $kamar= Kamar::find($id);
        $kamar->nama= $request->input('nama');
        $kamar->deskripsi= $request->input('deskripsi');
        if($request->has('image')){
            $kamar->gambar=$request->image->store('uploads','public');
        }
        $kamar->save();
        return redirect('/kamar')->with('message','Kamar berhasil diperbarui');
    }
    public function destroy($id)
    {
        $kamar= Kamar::find($id);
        $kamar->delete();
        return back()->with('message','Kamar berhasil dihapus');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    
}
