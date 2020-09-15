<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index','home']]);
    }
    public function index()
    {
        $galeri=Galeri::all();
        return view('galeri.galeri')->with('galeriList', $galeri);
    }

    public function home()
    {
        $galeri=Galeri::all();
        return view('pages.beranda')->with('galeriList', $galeri);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.tambahGaleri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galeri= new Galeri;
        $request->validate([
            'image'=>'required|image',
        ]);
        $galeri->nama= $request->input('nama');
        if($request->has('image')){
            $galeri->gambar=$request->image->store('uploads','public');
        } else { 
            $galeri->gambar='';
        }
        $galeri->save();
        return redirect('/galeri')->with('message','Spot berhasil ditambah');
    }

    public function edit( $id)
    {
        $galeri= Galeri::find($id);
        return view('galeri.ubahSpot')->with('galeri',$galeri);
    }

    public function update(Request $request, $id)
    {
        $galeri= Galeri::find($id);
        $request->validate([
            'image'=>'image',
        ]);
        $galeri->nama= $request->input('nama');
        if($request->has('image')){
            $galeri->gambar=$request->image->store('uploads','public');
        }
        $galeri->save();
        return redirect('/galeri')->with('message','Spot berhasil diperbarui');
    }
    public function destroy($id)
    {
        $galeri= Galeri::find($id);
        $galeri->delete();
        return back()->with('message','Spot berhasil dihapus');
    }
}
