<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use App\Blok;
use App\Lot;
use App\KategoriPampasan;

class BorangHController extends Controller
{
    public function index()
    {
    	$borangh 	=	Pemilik::all();
    	//dd($borangh);
    	return view('borangh.index',compact('borangh'));
    }

    public function create()
    {
    	$blok 	=	Blok::pluck('nama','id');
    	$lot 	=	Lot::pluck('nama','id');
        $kategori = KategoriPampasan::pluck('nama','id');
    	//dd($blok);

    	return view('borangh.create',compact('blok','lot','kategori'));
    }

    public function store(Request $request)
    {
        $borangh = new Pemilik;

        $borangh->id_blok                   = $request->get('id_blok');
        $borangh->id_lot                    = $request->get('id_lot');
        $borangh->nama                      = $request->get('nama');
        $borangh->no_kp                     = $request->get('no_kp');
        $borangh->kategori_pampasan         = $request->get('kategori_pampasan');

        $borangh->save();

        return redirect()->route('borangh.index');
    }

    public function destroy($id)
    {
        $borangh = Pemilik::find($id);
        $borangh->delete();

        return redirect()->route('borangh.index');
    }

    public function show($id)
    {
        $form       =   Pemilik::findOrFail($id);
        $blok       =   Blok::pluck('nama','id');
        $lot        =   Lot::pluck('nama','id');
        $kategori   =   KategoriPampasan::pluck('nama','id');

        return view('borangh.show',compact('form','blok','lot','kategori'));
    }

    public function update($id, Request $request)
    {
        $borangh = Pemilik::find($id);

        $borangh->id_blok                   = $request->get('id_blok');
        $borangh->id_lot                    = $request->get('id_lot');
        $borangh->nama                      = $request->get('nama');
        $borangh->no_kp                     = $request->get('no_kp');
        $borangh->kategori_pampasan         = $request->get('kategori_pampasan');

        $borangh->save();

        return redirect()->route('borangh.index');
    }
}
