<?php

namespace App\Http\Controllers;

use App\FasilitasHomeStay;
use Illuminate\Http\Request;

class FasilitasHomeStayController extends Controller
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
        $fasilitasHomeStay = FasilitasHomeStay::all();
        return view('pages.fasilitashomestay')->with('fasilitasList',$fasilitasHomeStay);
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
        $fasilitasHomeStay= new FasilitasHomeStay;
        $fasilitasHomeStay->nama=$request->input('nama');
        $fasilitasHomeStay->save();
        return back()->with('message','Fasilitas berhasil ditambahkan');
    }
    public function update(Request $request, $id)
    {
        $fasilitasHomeStay= FasilitasHomeStay::find($id);
        $fasilitasHomeStay->nama=$request->input('nama');
        $fasilitasHomeStay->save();
        return back()->with('message','Fasilitas berhasil diubah');
    }

    public function destroy( $id)
    {
        $fasilitasHomeStay= FasilitasHomeStay::find($id);
        $fasilitasHomeStay->delete();
        return back()->with('message','Fasilitas berhasil dihapus');
    }
}
