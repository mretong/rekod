<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daerah;
use App\Negeri;

class DaerahController extends Controller
{
    public function index()
    {
    	$daerah = Daerah::all();
        // $negeri = Negeri::all();
    	return view('daerah.index',compact('daerah','negeri'));
    }

    public function create()
    {
        $negeri = Negeri::pluck('nama','kod');
    	return view('daerah.create',compact('negeri'));
    }

    public function store(Request $request)
    {
    	$daerah = new Daerah;

    	$daerah->nama          =   $request->get('nama');
        $daerah->kod           =   $request->get('kod');
        $daerah->id_negeri     =   $request->get('id_negeri');

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
        $negeri = Negeri::pluck('nama','kod');
        return view('daerah.show', compact('district','negeri'));
    }

    public function update($id, Request $request)
    {
        $daerah = Daerah::find($id);

        $daerah->nama          =   $request->get('nama');
        $daerah->kod           =   $request->get('kod');
        $daerah->id_negeri     =   $request->get('id_negeri');

        $daerah->save();

        return redirect()->route('daerah.index');
    }
}
