<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use Session;
use Redirect;

use App\Warta;
use App\Blok;
use App\Fasa;
use App\Pakej;
use App\Mukim;

use Carbon\Carbon;

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

    	return view('warta.create',compact('blok','fasa','pakej','mukim'));
    }

    public function store(Request $request)
    {
        // #1
        if(Auth::user()->status == 0) {
            Session::flush();
            Session::flash('message', 'Ralat.');
            Auth::logout();
            return redirect()->route('login');
        }

        // #2
        $no_warta = $request->get('no_warta');
        $warta = Warta::where('no_warta', $no_warta)->get();

        if(empty($warta)) {
            Session::flash('message', 'No Warta telah wujud.');
            return redirect('warta.index');
        }

        // #3
        $validation = Validator::make($request->all(), [
            'blok'              => 'required',
            'fasa'              => 'required',
            'pakej'             => 'required',
            'tarikh_warta'      => 'required',
            'tarikh_luput'      => 'required',
            'jilid'             => 'required|min:2',
            'no_warta'          => 'required|min:2',
            
        ]);

        // #4
        $warta = Warta::where('no_jilid', $request->get('no_jilid'))
                    ->where('no_warta', $request->get('no_warta'))
                    ->get();
        if(!empty($warta)) {
            Session::flash('message', 'No Jilid dan No Warta telah wujud');
            return back()->withInput();
        }


        if($validation->fails()){
            Session::flash('message', 'Ruangan Blok, Fasa, Pakej, Tarikh Warta, Tarikh Luput, Jilid Warta dan No. Warta adalah wajib diisi.');
            return back()->withInput($request->all())->withErrors($validation);
        }

        // #5
        $luput = $request->get('tarikh_warta')->addYear()->yesterday();
        //dd($luput);

        $warta = new Warta;

        $warta->id_blok         =   $request->get('blok');
        $warta->id_fasa         =   $request->get('fasa');
        $warta->id_pakej        =   $request->get('pakej');
        $warta->tarikh_warta    =   $request->get('tarikh_warta');
        $warta->tarikh_luput    =   $luput;
        $warta->jilid_warta     =   $request->get('jilid');
        $warta->no_warta        =   $request->get('no_warta');
        $warta->rujukan         =   $request->get('rujukan');
        $warta->catatan         =   $request->get('catatan');



        if($warta->save()) {
            Session::flash('message', 'Warta telah disimpan');
        }


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

        $warta->id_blok         =   $request->get('id_blok');
        $warta->id_fasa         =   $request->get('id_fasa');
        $warta->id_pakej        =   $request->get('id_pakej');
        $warta->tarikh_warta    =   $request->get('tarikh_warta');
        $warta->tarikh_luput    =   $request->get('tarikh_luput');
        $warta->jilid_warta     =   $request->get('jilid_warta');
        $warta->no_warta        =   $request->get('no_warta');
        $warta->rujukan         =   $request->get('rujukan');
        $warta->catatan         =   $request->get('catatan');

        $warta->save();

        return redirect()->route('warta.index');
    }
}
