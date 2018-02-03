<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;
use App\Warta;
use App\Blok;

class PerbicaraanController extends Controller
{
    public function index()
    {
    	$bicara = Perbicaraan::all();
    	dd('here');
    	//return view ('bicara.index',compact('bicara'));
    }
}
