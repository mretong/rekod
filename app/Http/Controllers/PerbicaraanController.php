<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;
use App\Staff;
use App\Lot;
use App\StatusBicara;
use App\Blok;

class PerbicaraanController extends Controller
{
    public function index()
    {
    	$bicara = Perbicaraan::all();
        // $staf   = Staff::all();
    	// dd('here');
    	return view ('bicara.index',compact('bicara'));
    }

    public function create()
    {
    	$staf 	= 	Staff::pluck('nama','no_pekerja');
    	$lot 	=	Lot::pluck('no_lot','id');
        $sb     =   StatusBicara::pluck('nama','id');
        $blok   =   Blok::pluck('nama','id');
    	//dd($staf);
    	return view('bicara.create',compact('staf', 'lot','sb','blok'));
    }

    public function store(Request $request)
    {
    	$bicara = new Perbicaraan;

    	$bicara->tarikh_1			=	$request->get('tarikh_1');
    	$bicara->tarikh_2			=	$request->get('tarikh_2');
    	$bicara->tarikh_3			=	$request->get('tarikh_3');
    	$bicara->tarikh_4			=	$request->get('tarikh_4');
    	$bicara->tarikh_5			=	$request->get('tarikh_5');
    	$bicara->id_lot				=	$request->get('id_lot');
        $bicara->id_blok            =   $request->get('id_blok');
    	$bicara->no_pekerja    		=	$request->get('no_pekerja');
    	$bicara->status				=	$request->get('status');
    	$bicara->bilangan			=	$request->get('bilangan');
    	$bicara->pampasan			=	$request->get('pampasan');
    	$bicara->kos_lain			=	$request->get('kos_lain');
    	$bicara->catatan			=	$request->get('catatan');
    	$bicara->jajaran			=	$request->get('jajaran');

    	$bicara->save();

    	return redirect()->route('bicara.index');
    }

    public function destroy($id)
    {
    	$bicara = Perbicaraan::find($id);
    	$bicara->delete();

    	return redirect()->route('bicara.index');
    }

    public function show($id)
    {
        $hears  = Perbicaraan::findOrFail($id);
    	$staf   =   Staff::pluck('nama','no_pekerja');
        $lot    =   Lot::pluck('no_lot','id');
        $sb     =   StatusBicara::pluck('nama','id');
        $blok   =   Blok::pluck('nama','id'); 

    	return view('bicara.show',compact('hears','blok','staf','lot','sb'));
    }

    public function update($id, Request $request)
    {
    	$bicara = Perbicaraan::find($id);

    	$bicara->tarikh_1			=	$request->get('tarikh_1');
    	$bicara->tarikh_2			=	$request->get('tarikh_2');
    	$bicara->tarikh_3			=	$request->get('tarikh_3');
    	$bicara->tarikh_4			=	$request->get('tarikh_4');
    	$bicara->tarikh_5			=	$request->get('tarikh_5');
    	$bicara->id_lot				=	$request->get('id_lot');
    	$bicara->no_pekerja    		=	$request->get('no_pekerja');
    	$bicara->status				=	$request->get('status');
    	$bicara->bilangan			=	$request->get('bilangan');
    	$bicara->pampasan			=	$request->get('pampasan');
    	$bicara->kos_lain			=	$request->get('kos_lain');
    	$bicara->catatan			=	$request->get('catatan');
    	$bicara->jajaran			=	$request->get('jajaran');

    	$bicara->save();
    	return redirect()->route('bicara.index');
    }

}
