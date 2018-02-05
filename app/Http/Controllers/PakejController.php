<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pakej;

class PakejController extends Controller
{
    public function index()
    {
    	$pakej = Pakej::all();
    	return view('pakej.index',compact('pakej'));
    }

    public function create()
    {
    	return view('pakej.create');
    }

    public function store(Request $request)
    {
    	$pakej = new Pakej;

    	$pakej->kod  = $request->get('kod');
    	$pakej->nama = $request->get('nama');

    	$pakej->save();
    	return redirect()->route('pakej.index');
    }

    public function destroy($id)
    {
    	$pakej = Pakej::findOrFail($id);
    	$pakej->delete();
    	
    	return redirect()->route('pakej.index');
    }

    public function show($id)
    {
    	$pack = Pakej::findOrFail($id);
        return view('pakej.show', compact('pack'));
    }

    public function update($id, Request $request)
    {
        $pakej = Pakej::find($id);

        $pakej->kod         =   $request->get('kod');
        $pakej->nama          =   $request->get('nama');

        $pakej->save();

        return redirect()->route('pakej.index');
    }
}
