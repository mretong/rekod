<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;
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

    public function store(Request $request)
    {
    	$bicara = new Perbicaraan;

    	$bicara->tarikh_1			=	$request->get('tarikh_1');
    	$bicara->tarikh_2			=	$request->get('tarikh_2');
    	$bicara->tarikh_3			=	$request->get('tarikh_3');
    	$bicara->tarikh_4			=	$request->get('tarikh_4');
    	$bicara->tarikh_5			=	$request->get('tarikh_5');
    	$bicara->id_lot				=	$request->get('id_lot');
    	$bicara->nama_pentadbir		=	$request->get('nama');
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
    	$bicara = Perbicaraan::findOrFail($id);

    	return view('bicara.show',compact('bicara'));
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
    	$bicara->nama_pentadbir		=	$request->get('nama');
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
