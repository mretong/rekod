<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warta;
use App\Blok;
use App\Fasa;
use App\Pakej;
use App\Mukim;

class WartaController extends Controller
{
    public function index()
    {
    	$warta = Warta::all();

    	return view('warta.index',compact('warta'));
    }

    public function create()
    {
    	$blok  = Blok::pluck('nama', 'id');
        $fasa  = Fasa::pluck('nama','id');
        $pakej = Pakej::pluck('nama','id');
        $mukim = Mukim::pluck('nama','id');

         //dd('here');

    	return view('warta.create',compact(['blok','fasa','pakej','mukim']));
    }

    public function store(Request $request)
    {
        $warta = new Warta;

        $warta->id_blok         =   $request->get('blok');
        $warta->id_fasa         =   $request->get('fasa');
        $warta->id_pakej        =   $request->get('pakej');
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

    public function destroy($id)
    {
        $warta = Warta::find($id);
        $warta->delete();

        return redirect()->route('warta.index');
    }

    public function show($id)
    {
        $news = Warta::findOrFail($id);
        $blok = Blok::pluck('nama', 'id');
        $fasa = Fasa::pluck('nama','id');
        $pakej = Pakej::pluck('nama','id');

        return view('warta.show', compact('news', 'blok', 'fasa', 'pakej'));
    }

    public function update($id, Request $request)
    {
        $warta = Warta::find($id);

        $warta->id_blok         =   $request->get('blok');
        $warta->id_fasa         =   $request->get('fasa');
        $warta->id_pakej        =   $request->get('pakej');
        $warta->tarikh_warta    =   $request->get('tarikh_warta');
        $warta->tarikh_luput    =   $request->get('tarikh_luput');
        $warta->jilid_warta     =   $request->get('jilid');
        $warta->no_warta        =   $request->get('no_warta');
        $warta->rujukan         =   $request->get('rujukan');
        $warta->catatan         =   $request->get('catatan');

        $warta->save();

        return redirect()->route('warta.index');
    }
}
