<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lot;
use App\Pakej;
use App\StatusTanah;

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
    	return view('lot.create',compact('pakej','tanah'));
    }

    public function store(Request $request)
    {
    	$lot = new Lot;

    	$lot->nama = $request->get('nama');
    	$lot->id_pakej = $request->get('pakej');
    	$lot->status_tanah = $request->get('tanah');

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
    	$soil = Lot::findOrFail($id);
    	return view('lot.show',compact('soil'));
    }

    public function update($id, Request $request)
    {
    	$lot = Lot::find($id);

    	$lot->nama = $request->get('nama');
    	$lot->id_pakej = $request->get('pakej');
    	$lot->status_tanah = $request->get('tanah');

    	$lot->save();
    	return redirect()->route('lot.index');
    }

}
