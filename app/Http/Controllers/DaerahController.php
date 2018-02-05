<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daerah;

class DaerahController extends Controller
{
    public function index()
    {
    	$daerah = Daerah::all();
    	return view('daerah.index',compact('daerah'));
    }

    public function create()
    {
    	return view('daerah.create');
    }

    public function store()
    {
    	$daerah = new Daerah;

    	$daerah->nama         =   $request->get('nama');
        $daerah->kod          =   $request->get('kod');

        $daerah->save();

        return redirect()->route('daerah.index');
    }

    public function destroy($id)
    {
    	$daerah = Daerah::find($id);
        $daerah->delete();

        return redirect()->route('daerah.index');
    }

    public function show($id)
    {
    	$district = Daerah::findOrFail($id);
        return view('daerah.show', compact('district'));
    }

    public function update($id, Request $request)
    {
        $daerah = Daerah::find($id);

        $daerah->nama         =   $request->get('nama');
        $daerah->kod          =   $request->get('kod');

        $daerah->save();

        return redirect()->route('daerah.index');
    }
}
