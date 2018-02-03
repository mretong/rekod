<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;

class PerbicaraanController extends Controller
{
    public function index()
    {
    	$bicara = Perbicaraan::all();
    	return view ('bicara.index',compact('bicara'));
    }
}
