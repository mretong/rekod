<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perbicaraan;
use App\Staff;
use App\Lot;
use App\StatusBicara;
use App\Blok;
use App\Daerah;
use App\Mukim;

class PerbicaraanController extends Controller
{
    public function index()
    {
    	$bicara = Perbicaraan::paginate(10);
        // $staf   = Staff::all();
    	// dd('here');
    	return view ('bicara.index',compact('bicara'));
    }

    public function create()
    {
    	$staff 	= 	Staff::pluck('nama','id');
    	$lot 	=	Lot::pluck('no_lot','id');
        $sb     =   StatusBicara::pluck('nama','id');
        $blok   =   Blok::pluck('nama','id');
        $daerah =   Daerah::pluck('nama','id');
        $mukim  =   Mukim::pluck('nama','id');
    	//dd($staf);
    	return view('bicara.create',compact('staff', 'lot','sb','blok','daerah','mukim'));
    }

    public function store(Request $request)
    {
    	$bicara = new Perbicaraan;

        $bicara->tarikh_1			=	$request->get('tarikh_1');
    	$bicara->tarikh_2			=	$request->get('tarikh_2');
    	$bicara->tarikh_3			=	$request->get('tarikh_3');
    	$bicara->tarikh_4			=	$request->get('tarikh_4');
    	$bicara->tarikh_5			=	$request->get('tarikh_5');
        $bicara->id_daerah          =   $request->get('id_daerah');
        $bicara->id_mukim           =   $request->get('id_mukim');
        $bicara->id_lot             =   $request->get('id_lot');
        $bicara->id_blok            =   $request->get('id_blok');
    	$bicara->id_staff    		=	$request->get('id_staff');
    	$bicara->id_status			=	$request->get('status');
        $bicara->bil_pemilik        =   $request->get('tuan_tanah');
        $bicara->luas_ambil         =   $request->get('luas_ambil');
        $bicara->harga_tanah        =   $request->get('harga');
        $bicara->wakil_mada         =   $request->get('wakil_mada');
        $bicara->wakil_jps          =   $request->get('wakil_jps');
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
    	$staff   =   Staff::pluck('nama','no_pekerja');
        $lot    =   Lot::pluck('no_lot','id');
        $sb     =   StatusBicara::pluck('nama','id');
        $blok   =   Blok::pluck('nama','id'); 

    	return view('bicara.show',compact('hears','blok','staff','lot','sb'));
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
    	$bicara->id_status			=	$request->get('status');
    	$bicara->bilangan			=	$request->get('bilangan');
    	$bicara->pampasan			=	$request->get('pampasan');
    	$bicara->kos_lain			=	$request->get('kos_lain');
    	$bicara->catatan			=	$request->get('catatan');
    	$bicara->jajaran			=	$request->get('jajaran');

    	$bicara->save();
    	return redirect()->route('bicara.index');
    }

}
