<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mukim;
use App\Blok;

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
    	$blok = Blok::pluck('nama','id');
    	return view('mukim.create',compact('blok'));
    }

    public function store()
    {
    	$mukim = new Mukim;

    	$mukim->id_blok		=	$request->get('blok');
    	$mukim->nama 		=	$request->get('nama');
    	$mukim->no_geran	=	$request->get('geran');

    	$mukim->save();

    	return redirect()->route('mukim.index');
    }
}
