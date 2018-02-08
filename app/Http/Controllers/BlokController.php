<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blok;
use App\Fasa;

class BlokController extends Controller
{
    public function index()
    {
    	$blok = Blok::all();

    	return view('blok.index',compact('blok'));
    }

    public function create()
    {
        // $blok = Blok::find(1);
        // $blok->roles()->attach($id);
        $fasa = Fasa::pluck('nama','kod');
        return view('blok.create',compact('fasa'));
    }

    public function store(Request $request)
    {
    	$blok = new Blok;

    	$blok->nama 			= $request->get('nama');
    	$blok->jum_lot_total	= $request->get('total');
    	$blok->anggaran_kos		= $request->get('kos');
    	$blok->status_batal		= $request->get('status');
    	$blok->id_fasa	        = $request->get('fasa');
    	$blok->rujukan_jkptg	= $request->get('jkptg');
    	$blok->rujukan_jps		= $request->get('jps');
    	$blok->jajaran			= $request->get('jajaran');

    	// $blok->roles()->save();
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
    	$bloks = Blok::findOrFail($id);
        return view('blok.show', compact('bloks'));
    }

    public function update($id, Request $request)
    {
        $blok = Blok::find($id);

        $blok->nama 			= $request->get('nama');
    	$blok->jum_lot_total	= $request->get('total');
    	$blok->anggaran_kos		= $request->get('kos');
    	$blok->status_batal		= $request->get('status');
    	$blok->fasa_pengambilan	= $request->get('fasa');
    	$blok->rujukan_jkptg	= $request->get('jkptg');
    	$blok->rujukan_jps		= $request->get('jps');
    	$blok->jajaran			= $request->get('jajaran');

        $blok->save();

        return redirect()->route('blok.index');
    }
}
