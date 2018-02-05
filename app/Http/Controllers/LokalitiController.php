<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokaliti;

class LokalitiController extends Controller
{
    public function index()
    {
    	$lokaliti = Lokaliti::all();
    	return view('lokaliti.index',compact('lokaliti'));
    }

    public function create()
    {
    	return view('lokaliti.create');
    }

    public function store(Request $request)
    {
    	$lokaliti = new Lokaliti;

    	$lokaliti->nama 	= $request->get('nama');
    	$lokaliti->kod 		= $request->get('kod');

    	$lokaliti->save();
    	return redirect()->route('lokaliti.index');
    }

    public function destroy($id)
    {
    	$lokaliti = Lokaliti::find($id);
        $lokaliti->delete();

        return redirect()->route('lokaliti.index');
    }

    public function show($id)
    {
    	$ptj = Lokaliti::findOrFail($id);
        return view('lokaliti.show', compact('ptj'));
    }

    public function update($id, Request $request)
    {
        $lokaliti = Lokaliti::find($id);

        $lokaliti->nama         =   $request->get('nama');
        $lokaliti->kod          =   $request->get('kod');

        $lokaliti->save();

        return redirect()->route('lokaliti.index');
    }
}
