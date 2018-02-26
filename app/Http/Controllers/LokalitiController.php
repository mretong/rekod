<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokaliti;
use App\Wilayah;

class LokalitiController extends Controller
{
    public function index()
    {
    	$lokaliti = Lokaliti::paginate(10);
    	return view('lokaliti.index',compact('lokaliti'));
    }

    public function create()
    {
        $wilayah = Wilayah::pluck('nama','id');
    	return view('lokaliti.create',compact('wilayah'));
    }

    public function store(Request $request)
    {
    	$lokaliti = new Lokaliti;

    	$lokaliti->nama 	  = $request->get('nama');
    	$lokaliti->kod 		  = $request->get('kod');
        $lokaliti->id_wilayah = $request->get('id_wilayah');

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
        $wilayah = Wilayah::pluck('nama','id');

        return view('lokaliti.show', compact('ptj','wilayah'));
    }

    public function update($id, Request $request)
    {
        $lokaliti = Lokaliti::find($id);

        $lokaliti->nama       = $request->get('nama');
        $lokaliti->kod        = $request->get('kod');
        $lokaliti->id_wilayah = $request->get('id_wilayah');

        $lokaliti->save();

        return redirect()->route('lokaliti.index');
    }
}
