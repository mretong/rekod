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
        if(Auth::user()->status == 0) {
            Session::flush();
            Session::flash('error', 'Ralat.');
            Auth::logout();
            return redirect()->route('login');
        }

        if($request->get('no_warta') != '') {
            $no_warta = Warta::where('no_warta', $request->get('no_warta'))->first();

            if($no_warta != null) {
                Session::flash('alert-danger', 'Jilid Warta dengan No Warta ini telah wujud. Sila buat carian untuk pengemaskinian. (eg: penambahan atau pengurangan)');
                return back()->withInput($request->all());
            }
        }

        $validation = Validator::make($request->all(), [
            'blok'              => 'required',
            'fasa'              => 'required',
            'pakej'             => 'required',
            'tarikh_warta'      => 'required',
            'tarikh_luput'      => 'required',
            'jilid'             => 'required|min:2',
            'no_warta'          => 'required|min:2',
            
        ]);

        if($validation->fails()){
            Session::flash('alert-danger', 'Ruangan Blok, Fasa, Pakej, Tarikh Warta, Tarikh Luput, Jilid Warta dan No. Warta adalah wajib diisi. <br />Perlu diisi dengan format yang betul');
            return back()->withInput($request->all());
        }

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
