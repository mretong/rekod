<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mukim;
use App\Daerah;
use App\Wilayah;

class MukimController extends Controller
{
    public function index()
    {
    	$mukim = Mukim::all();
    	//dd($mukim);
    	return view('mukim.index',compact('mukim','blok'));
    }

    public function create()
    {
        $daerah = Daerah::pluck('nama','id');
        $wilayah = Wilayah::pluck('nama','id');
    	return view('mukim.create',compact('daerah','wilayah'));
    }

    public function store(Request $request)
    {
    	$mukim = new Mukim;

    	$mukim->nama 		=	$request->get('nama');
        $mukim->id_daerah   =   $request->get('id_daerah');
        $mukim->id_wilayah  =   $request->get('id_wilayah');

    	$mukim->save();

    	return redirect()->route('mukim.index');
    }

    public function destroy($id)
    {
        $mukim = Mukim::find($id);
        $mukim->delete();

        return redirect()->route('mukim.index');
    }

    public function show($id)
    {
        $stay = Mukim::findOrFail($id);
        $daerah = Daerah::pluck('nama','id');
        $wilayah = Wilayah::pluck('nama','id');

        return view('mukim.show',compact('stay','daerah','wilayah'));
    }

    public function update($id, Request $request)
    {
        $mukim = Mukim::find($id);

        $mukim->nama        =   $request->get('nama');
        $mukim->id_daerah   =   $request->get('id_daerah');
        $mukim->id_wilayah  =   $request->get('id_wilayah');

        $mukim->save();

        return redirect()->route('mukim.index');
    }
}
