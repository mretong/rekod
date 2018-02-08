<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusBicara;

class StatusBicaraController extends Controller
{
    public function index()
    {
    	$sb = StatusBicara::all();
    	return view('status_bicara.index',compact('sb'));
    }

    public function create()
    {
    	return view('status_bicara.create');
    }

    public function store(Request $request)
    {
    	$sb = new StatusBicara;

    	$sb->nama 	= $request->get('nama');
    	$sb->kod 	= $request->get('kod');

    	$sb->save();
    	return redirect()->route('status_bicara.index');
    }

    public function destroy($id)
    {
    	$sb = StatusBocara::find($id);
    	$sb->delete();

    	return redirect()->route('status_bicara.index');
    }

    public function show($id)
    {
    	$sbs = StatusBicara::findOrFail($id);
    	return view('status_bicara.show',compact('sbs'));
    }

    public function update($id, Request $request)
    {
    	$sb = StatusBicara::find($id);

    	$sb->nama 	= $request->get('nama');
    	$sb->kod 	= $request->get('kod');

    	$sb->save();
    	return redirect()->route('status_bicara.index');
    }
}
