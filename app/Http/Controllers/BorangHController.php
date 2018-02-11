<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use App\Blok;
use App\Fasa;
use App\Pakej;
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
    	$fasa 	=	Fasa::pluck('nama','id');
    	$pakej 	=	Pakej::pluck('nama','id');
    	$lot 	=	Lot::pluck('nama','id');
        $kategori = KategoriPampasan::pluck('nama','id');
    	//dd($blok);

    	return view('borangh.create',compact('blok','fasa','pakej','lot','kategori'));
    }

    public function store(Request $request)
    {
        $borangh = new Pemilik;

        $borangh->id_lot        = $request->get('lot');
        $borangh->nama          = $request->get('nama');
        $borangh->no_kp         = $request->get('no_kp');
        $borangh->kategori      = $request->get('kategori');
    }
}
