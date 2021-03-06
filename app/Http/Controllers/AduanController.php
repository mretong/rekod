<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;
use App\Staff;
use App\Lot;
use App\StatusAduan;
use App\Blok;

class AduanController extends Controller
{
    public function index()
    {
    	$aduan = Aduan::all();
    	return view('aduan.index',compact('aduan'));
    }

    public function create()
    {
    	$staff = Staff::pluck('nama','no_pekerja');
    	$sa = StatusAduan::pluck('nama','id');
        $blok = Blok::pluck('nama','id');

        $lots = Lot::all();
        $dataLot = collect();

        foreach($lots as $lot) {
            $dataLot = $dataLot->union([$lot->id => $lot->no_lot . ' - ' . $lot->no_hakmilik]);
        }
        
    	return view('aduan.create',compact('staff','dataLot','sa','blok'));
    }

    public function store(Request $request)
    {
    	$aduan = new Aduan;

        $aduan->no_aduan        = $request->get('aduan');
        $aduan->tarikh_terima   = $request->get('tarikh_terima');
        $aduan->tarikh_selesai  = $request->get('tarikh_selesai');
        $aduan->masa_terima     = $request->get('masa');
        $aduan->id_staff        = $request->get('staff');
        $aduan->id_blok         = $request->get('id_blok');   	
    	$aduan->id_lot			= $request->get('id_lot');
    	$aduan->nama_pengadu	= $request->get('pengadu');
    	$aduan->no_tel 			= $request->get('no_tel');
    	$aduan->catatan 		= $request->get('catatan');
    	$aduan->maklumbalas		= $request->get('maklumbalas');
    	$aduan->status_aduan	= $request->get('status');

    	$aduan->save();
    	return redirect()->route('aduan.index');
	}

	public function destroy($id)
	{
		$aduan = Aduan::find($id);
		$aduan->delete();

		return redirect()->route('aduan.index');
	}

	public function show($id)
	{
		$rep = Aduan::findOrFail($id);
        $staff = Staff::pluck('nama','no_pekerja');
        $lot = Lot::pluck('no_lot','id');
        $sa = StatusAduan::pluck('nama','id');
        $blok = Blok::pluck('nama','id');

		return view('aduan.index',compact('rep','staff','lot','sa','blok'));
	}

	public function update($id, Request $request)
	{
		$aduan = Aduan::find($id);

    	$aduan->no_aduan		= $request->get('aduan');
    	$aduan->tarikh_terima	= $request->get('tarikh_terima');
    	$aduan->tarikh_selesai	= $request->get('tarikh_selesai');
    	$aduan->masa_terima		= $request->get('masa');
    	$aduan->id_staff		= $request->get('staff');
        $aduan->id_lot          = $request->get('id_lot');
    	$aduan->id_blok			= $request->get('id_blok');
    	$aduan->nama_pengadu	= $request->get('pengadu');
    	$aduan->no_tel 			= $request->get('no_tel');
    	$aduan->catatan 		= $request->get('catatan');
    	$aduan->maklumbalas		= $request->get('maklumbalas');
    	$aduan->status_aduan	= $request->get('status');

    	$aduan->save();
    	return redirect()->route('aduan.index');
	}
}
