<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ptj;

class PtjController extends Controller
{
    public function index()
    {
    	$ptj = Ptj::all();
    	return view('ptj.index',compact('ptj'));
    }

    public function create()
    {
    	return view('ptj.create');
    }

    public function store(Request $request)
    {
    	$ptj = new Ptj;

    	$ptj->nama = $request->get('nama');
    	$ptj->kod  = $request->get('kod');

    	$ptj->save();

    	return redirect()->route('ptj.index');
    }

    public function destroy($id)
    {
    	$ptj = Ptj::find($id);

    	$ptj->delete();
    	return redirect()->route('ptj.index');
    }

    public function show($id)
    {
    	$ptjs = Ptj::findOrFail($id);

    	return view('ptj.show',compact('ptjs'));
    }

    public function update($id, Request $request)
    {
    	$ptj = Ptj::find($id);

    	$ptj->nama = $request->get('nama');
    	$ptj->kod = $request->get('kod');

    	$ptj->save();

    	return redirect()->route('ptj.index');
    }
}
