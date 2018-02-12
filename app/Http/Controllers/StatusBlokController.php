<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusBlok;

class StatusBlokController extends Controller
{
    public function index()
    {
    	$status = StatusBlok::all();
    	return view('status_blok.index',compact('status'));
    }

    public function create()
    {
    	return view('status_blok.create');
    }

    public function store(Request $request)
    {
    	$status = new StatusBlok;

    	$status->nama 	= $request->get('nama');
    	$status->kod 	= $request->get('kod');

    	$status->save();

    	return redirect()->route('status_blok.index');
    }

    public function destroy($id)
    {
    	$status = StatusBlok::find($id);
    	$status->delete();

    	return redirect()->route('status_blok.index');
    }

    public function show($id)
    {
    	$blok = StatusBlok::findOrFail($id);

    	return view('status_blok.show',compact('blok'));
    }

    public function update($id, Request $request)
    {
    	$status = StatusBlok::find($id);

    	$status->nama = $request->get('nama'); 
    	$status->kod  = $request->get('kod');

    	$status->save();

    	return redirect()->route('status_blok.index');
    }
}
