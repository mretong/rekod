<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use App\Pakej;
use App\StatusTanah;
use App\Blok;
use App\Mukim;

class LotController extends Controller
{
	public function index()
	{
		$lot = Lot::all();
    	return view('lot.index',compact('lot'));
	}
    
    public function create()
    {
    	$pakej = Pakej::pluck('nama','kod');
        $tanah = StatusTanah::pluck('nama','id');
        $blok  = Blok::pluck('nama','id');
        $mukim = Mukim::pluck('nama','id');

    	return view('lot.create',compact('pakej','tanah','blok','mukim'));
    }

    public function store(Request $request)
    {
    	$lot = new Lot;

    	$lot->id_blok      = $request->get('no_blok');
    	$lot->id_pakej     = $request->get('pakej');
    	$lot->status_tanah = $request->get('tanah');
        $lot->no_lot       = $request->get('no_lot');
        $lot->no_hakmilik  = $request->get('no_hakmilik');
        $lot->id_mukim     = $request->get('id_mukim');

    	$lot->save();
    	return redirect()->route('lot.index');
    }

    public function destroy($id)
    {
    	$lot = Lot::find($id);
    	$lot->delete();

    	return redirect()->route('lot.index');
    }

    public function show($id)
    {
    	$soil  = Lot::findOrFail($id);
        $pakej = Pakej::pluck('nama','kod');
        $tanah = StatusTanah::pluck('nama','id');
        $blok  = Blok::pluck('nama','id');
        $mukim = Mukim::pluck('nama','id');

    	return view('lot.show',compact('soil','pakej','tanah','blok','mukim'));
    }

    public function update($id, Request $request)
    {
    	$lot = Lot::find($id);

    	$lot->id_blok      = $request->get('no_blok');
        $lot->id_pakej     = $request->get('pakej');
        $lot->status_tanah = $request->get('tanah');
        $lot->no_lot       = $request->get('no_lot');
        $lot->no_hakmilik  = $request->get('no_hakmilik');
        $lot->id_mukim     = $request->get('id_mukim');

    	$lot->save();
    	return redirect()->route('lot.index');
    }

}
