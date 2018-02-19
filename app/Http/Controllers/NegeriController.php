<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Auth;

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
        
        if($negeri->delete()) {
            Session::flash('success', 'Berjaya. Negeri ini telah dihapuskan dari sistem ini.');
        } else {
            Session::flash('success', 'Berjaya. Negeri ini telah dihapuskan dari sistem ini.');
        }

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
