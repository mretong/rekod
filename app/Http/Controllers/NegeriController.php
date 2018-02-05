<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Negeri;

class NegeriController extends Controller
{
    public function index()
    {
    	$negeri = Negeri::all();
    	return view('negeri.index',compact('negeri'));
    }

    public function create()
    {
    	return view('negeri.create');
    }

    public function store(Request $request)
    {
    	$negeri = new Negeri;

    	$negeri->nama         =   $request->get('nama');
        $negeri->kod          =   $request->get('kod');

        $negeri->save();

        return redirect()->route('negeri.index');
    }

    public function destroy($id)
    {
    	$negeri = Negeri::find($id);
        $negeri->delete();

        return redirect()->route('negeri.index');
    }

    public function show($id)
    {
    	$state = Negeri::findOrFail($id);
        return view('negeri.show', compact('state'));
    }

    public function update($id, Request $request)
    {
        $negeri = Negeri::find($id);

        $negeri->nama         =   $request->get('nama');
        $negeri->kod          =   $request->get('kod');

        $negeri->save();

        return redirect()->route('negeri.index');
    }
}
