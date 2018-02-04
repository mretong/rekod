<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;
use App\Warta;
use App\Blok;
use App\Staff;
use App\Lot;

class PerbicaraanController extends Controller
{
    public function index()
    {
    	$bicara = Perbicaraan::all();
    	// dd('here');
    	return view ('bicara.index',compact('bicara'));
    }

    public function create()
    {
    	$staf 	= 	Staff::pluck('nama','id');
    	$lot 	=	Lot::pluck('nama','id');
    	//dd($staf);
    	return view('bicara.create',compact('staf', 'lot'));
    }

}
