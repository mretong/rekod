<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mukim;

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
    	return view('mukim.create',compact('blok'));
    }

    public function store(Request $request)
    {
    	$mukim = new Mukim;

    	$mukim->nama 		=	$request->get('nama');
    	$mukim->no_geran	=	$request->get('geran');

    	$mukim->save();

    	return redirect()->route('mukim.index');
    }
}
