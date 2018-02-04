<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warta;
use App\Blok;
use App\Fasa;
use App\Pakej;

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
        $fasa = Fasa::pluck('nama','id');
        $pakej = Pakej::pluck('nama','id');

         //dd('here');

    	return view('warta.create',compact(['blok','fasa','pakej']));
    }

    public function store(Request $request)
    {
        $warta = new Warta;

        $warta->id_blok         =   $request->get('blok');
        $warta->fasa            =   $request->get('fasa');
        $warta->pakej           =   $request->get('pakej');
        $warta->tarikh_warta    =   $request->get('tarikh_warta');
        $warta->tarikh_luput    =   $request->get('tarikh_luput');
        $warta->jilid_warta     =   $request->get('jilid');
        $warta->no_warta        =   $request->get('no_warta');
        $warta->rujukan         =   $request->get('rujukan');
        $warta->catatan         =   $request->get('catatan');

        $warta->save();

        return redirect()->route('warta.index');
        // dd('hehehe');

    }
}
