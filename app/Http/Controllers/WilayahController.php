<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;
use App\Daerah;

class WilayahController extends Controller
{
    public function index()
    {
    	$wilayah = Wilayah::all();
    	return view('wilayah.index',compact('wilayah'));
    }

    public function create()
    {
        $daerah = Daerah::pluck('nama','id');
    	return view('wilayah.create',compact('daerah'));
    }

    public function store(Request $request)
    {
    	$wilayah = new Wilayah;

    	$wilayah->nama          = $request->get('nama');
    	$wilayah->kod           = $request->get('kod');
        $wilayah->id_daerah     = $request->get('id_daerah');

    	$wilayah->save();

    	return redirect()->route('wilayah.index');
    }

    public function destroy($id)
    {
    	$wilayah = Wilayah::find($id);
    	$wilayah->delete();

    	return redirect()->route('wilayah.index');
    }

    public function show($id)
    {
    	$territory = Wilayah::findOrFail($id);
        $daerah = Daerah::pluck('nama','id');

    	return view('wilayah.show',compact('territory','daerah'));
    }

    public function update($id, Request $request)
    {
    	$wilayah = Wilayah::find($id);

    	$wilayah->nama          = $request->get('nama');
        $wilayah->kod           = $request->get('kod');
        $wilayah->id_daerah     = $request->get('id_daerah');

    	$wilayah->save();

    	return redirect()->route('wilayah.index');
    }
}
