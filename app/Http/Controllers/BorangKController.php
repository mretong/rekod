<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BorangK;
use App\Blok;
use App\Lot;

class BorangKController extends Controller
{
    public function index()
    {
    	$borangk = BorangK::all();
    	return view('borangk.index',compact('borangk'));
    }

    public function create()
    {
    	$blok = Blok::pluck('nama','id');
    	$lot = Lot::pluck('no_lot','id');
    	return view('borangk.create',compact('blok','lot'));
    }

    public function store(Request $request)
    {
    	$borangk = new BorangK;

    	$borangk->id_blok		=	$request->get('id_blok');
    	$borangk->id_lot		=	$request->get('id_lot');
    	$borangk->tarikh_k		=	$request->get('tarikh_k');
    	$borangk->rujukan_k		=	$request->get('rujukan_k');
    	$borangk->rujukan_fail	=	$request->get('rujukan_fail');
    	$borangk->attachment 	=	$request->get('attachment');

    	$borangk->save();

    	return redirect()->route('borangk.index');
    }

    public function destroy($id)
    {
    	$borangk = BorangK::find($id);
    	$borangk->delete();

    	return redirect()->route('borangk.index');
    }

    public function show($id)
    {
    	$formk = BorangK::findOrFail($id);
    	$blok = Blok::pluck('nama','id');
    	$lot = Lot::pluck('no_lot','id');

    	return view('borangk.show',compact('formk','blok','lot'));
    }

    public function update($id, Request $request)
    {
    	$borangk = BorangK::find($id);

    	$borangk->id_blok 		= 	$request->get('id_blok');
    	$borangk->id_lot		= 	$request->get('id_lot');
    	$borangk->tarikh_k 		=	$request->get('tarikh_k');
    	$borangk->rujukan_k		= 	$request->get('rujukan_k');
    	$borangk->rujukan_fail 	= 	$request->get('rujukan_fail');
    	$borangk->attachment 	= 	$request->get('attachment');

    	$borangk->save();

    	return redirect()->route('borangk.index');
    }
}
