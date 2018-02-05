<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasa;

class FasaController extends Controller
{
    public function index()
    {
    	$fasa = Fasa::all();
    	//dd($fasa);
    	return view('fasa.index',compact('fasa'));
    }

    public function create()
    {
    	return view('fasa.create');
    }

    public function store(Request $request)
    {
    	$fasa = new Fasa;

    	$fasa->kod 	= $request->get('kod');
    	$fasa->nama = $request->get('nama');

    	$fasa->save();
    	return redirect()->route('fasa.index');
    }

    public function destroy($id)
    {
    	$fasa = Fasa::find($id);
    	$fasa->delete();

    	return redirect()->route('fasa.index');
    }

    public function show($id)
    {
    	$phase = Fasa::findOrFail($id);
    	return view('fasa.show',compact('phase'));
    }

    public function update($id, Request $request)
    {
    	$fasa = Fasa::find($id);

    	$fasa->kod 	= $request->get('kod');
    	$fasa->nama = $request->get('nama');

    	$fasa->save();
    	return redirect()->route('fasa.index');
    }
}
