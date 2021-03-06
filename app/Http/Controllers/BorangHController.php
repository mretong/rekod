<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use App\Blok;
use App\Lot;
use App\KategoriPampasan;
use App\Penerima;

class BorangHController extends Controller
{
    public function index()
    {
    	$borangh 	=	Pemilik::paginate(10);
    	//dd($borangh);
    	return view('borangh.index',compact('borangh'));
    }

    public function create()
    {
    	$blok 	=	Blok::pluck('nama','id');
    	$lot 	=	Lot::pluck('no_lot','id');
        $kategori = KategoriPampasan::pluck('nama','id');
        $penerima = Penerima::pluck('nama','id');
    	//dd($blok);

    	return view('borangh.create',compact('blok','lot','kategori','penerima'));
    }

    public function store(Request $request)
    {
        $borangh = new Pemilik;

        $borangh->id_blok                   = $request->get('id_blok');
        $borangh->id_lot                    = $request->get('id_lot');
        $borangh->nama                      = $request->get('nama');
        $borangh->no_kp                     = $request->get('no_kp');
        $borangh->id_status                 = $request->get('id_status');
        $borangh->pecahan                   = $request->get('pecahan');
        $borangh->tarikh_h                  = $request->get('tarikh_h');
        $borangh->tarikh_terima             = $request->get('tarikh_terima');
        $borangh->rujukan_jps               = $request->get('jps');
        $borangh->rujukan_jkptg             = $request->get('jkptg');
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
        $lot        =   Lot::pluck('no_lot','id');
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
        $borangh->id_status                 = $request->get('id_status');
        $borangh->pecahan                   = $request->get('pecahan');
        $borangh->tarikh_h                  = $request->get('tarikh_h');
        $borangh->tarikh_terima             = $request->get('tarikh_terima');
        $borangh->rujukan_jps               = $request->get('jps');
        $borangh->rujukan_jkptg             = $request->get('jkptg');
        $borangh->kategori_pampasan         = $request->get('kategori_pampasan');

        $borangh->save();

        return redirect()->route('borangh.index');
    }
}
