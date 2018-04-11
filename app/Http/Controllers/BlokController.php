<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blok;
use App\Fasa;
use App\Lokaliti;
use App\Pakej;

class BlokController extends Controller
{
    public function index()
    {
    	$blok = Blok::paginate(10);

    	return view('blok.index',compact('blok'));
    }

    public function create()
    {
        $lokaliti = Lokaliti::pluck('nama','id');
        $fasa = Fasa::pluck('nama','id');
        return view('blok.create',compact('fasa','lokaliti'));
    }

    public function store(Request $request)
    {
    	$blok = new Blok;

    	$blok->nama 			= $request->get('id_blok');
    	$blok->jum_lot_total	= $request->get('jum_lot_total');
        $blok->anggaran_kos     = $request->get('anggaran_kos');
    	$blok->id_lokaliti		= $request->get('id_lokaliti');
    	$blok->id_fasa	        = $request->get('fasa');

    	$blok->save();

    	return redirect()->route('blok.index');
    }

    public function destroy($id)
    {
    	$blok = Blok::find($id);
        $blok->delete();

        return redirect()->route('blok.index');
    }

    public function show($id)
    {
    	$tersier = Blok::findOrFail($id);
        $lokaliti = Lokaliti::pluck('nama','id');
        $fasa = Fasa::pluck('nama','kod');
        return view('blok.show', compact('tersier','lokaliti','fasa'));
    }

    public function update($id, Request $request)
    {
        $blok = Blok::find($id);

        $blok->nama             = $request->get('nama');
        $blok->jum_lot_total    = $request->get('jum_lot_total');
        $blok->anggaran_kos     = $request->get('anggaran_kos');
        $blok->id_lokaliti      = $request->get('id_lokaliti');
        $blok->id_fasa          = $request->get('fasa');

        $blok->save();

        return redirect()->route('blok.index');
    }
}
