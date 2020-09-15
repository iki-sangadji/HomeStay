<?php

namespace App\Http\Controllers;

use App\PaketWisata;
use App\Trip;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
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
        $paketList = PaketWisata::all();
        $tripList = Trip::all();
        return view("pages.paketwisata")->with("paketList",$paketList)->with("tripList",$tripList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTrip($id)
    {
        return view("pages.tambah_destinasi")->with("id",$id);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePaket(Request $request)
    {
        $paket= new PaketWisata;
        $paket->nama=$request->input('nama');
        $paket->harga=$request->input('harga');
        $paket->save();
        return redirect("/paket-wisata")->with("message","Paket berhasil ditambah");
    }

    public function storeTrip(Request $request, $id)
    {
        $trip= new Trip;
        $trip->nama=$request->input('nama');
        if($request->has('image')){
            $trip->gambar=$request->image->store('uploads','public');
        } else { 
            $trip->gambar='';
        }
        $trip->paket=$id;
        $trip->save();
        return redirect("/paket-wisata")->with("message","Trip berhasil ditambah");
    }
    

    
    public function editPaket($id)
    {
        $paket=PaketWisata::find($id);
        return view("pages.edit_paket_wisata")->with("paket",$paket);
    }

    
    public function updatePaket(Request $request, $id)
    {
        $paket= PaketWisata::find($id);
        $paket->nama=$request->input('nama');
        $paket->harga=$request->input('harga');
        $paket->save();
        return redirect("/paket-wisata")->with("message","Paket berhasil diubah");
    }


    public function editTrip($id)
    {
        $trip=Trip::find($id);
        return view("pages.ubah_destinasi")->with("trip",$trip)->with("id",$id);
    }

   
    public function updateTrip(Request $request, $id)
    {
        $trip= Trip::find($id);
        $trip->nama=$request->input('nama');
        if($request->has('image')){
            $trip->gambar=$request->image->store('uploads','public');
        }
        $trip->paket=$id;
        $trip->save();
        return redirect("/paket-wisata")->with("message","Trip berhasil diubah");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaketWisata  $paketWisata
     * @return \Illuminate\Http\Response
     */
    public function destroyPaket($id)
    {
        $paket=PaketWisata::find($id);
        $paket->delete();
        return redirect("/paket-wisata")->with("message","Paket berhasil dihapus");
    }
    public function destroyTrip($id)
    {
        $trip=Trip::find($id);
        $trip->delete();
        return redirect("/paket-wisata")->with("message","Trip berhasil dihapus");
    }
}
