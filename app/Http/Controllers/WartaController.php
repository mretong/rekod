<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warta;
use App\Blok;

class WartaController extends Controller
{
    public function index()
    {
    	$warta = Warta::all();

    	return view('warta.index',compact('warta'));
    }

    public function create()
    {
    	$blok = Blok::pluck('nama', 'id');

        // dd($jabatan);

    	return view('warta.create', compact('blok'));
    }
}
