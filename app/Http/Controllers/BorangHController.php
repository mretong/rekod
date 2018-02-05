<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;
use App\Blok;
use App\Fasa;
use App\Pakej;
use App\Lot;

class BorangHController extends Controller
{
    public function index()
    {
    	$borangh 	=	Pemilik::all();
    	//dd($borangh);
    	return view('borangh.index',compact('borangh'));
    }

    public function create()
    {
    	$blok 	=	Blok::pluck('nama','id');
    	$fasa 	=	Fasa::pluck('nama','id');
    	$pakej 	=	Pakej::pluck('nama','id');
    	$lot 	=	Lot::pluck('nama','id');
    	//dd($blok);

    	return view('borangh.create',compact('blok','fasa','pakej','lot'));
    }

    public function store()
    {

    }
}
