<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aduan;
use App\Staff;
use App\Lot;
use App\StatusAduan;

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
    	$lot = Lot::pluck('no_lot','id');
    	$sa = StatusAduan::pluck('nama','id');
    	return view('aduan.create',compact('staff','lot','sa'));
    }

    public function store(Request $request)
    {
    	$aduan = new Aduan;

    	$aduan->no_aduan		= $request->get('aduan');
    	$aduan->tarikh_terima	= $request->get('tarikh_terima');
    	$aduan->tarikh_selesai	= $request->get('tarikh_selesai');
    	$aduan->masa_terima		= $request->get('masa');
    	$aduan->id_staff		= $request->get('staff');
    	$aduan->id_lot			= $request->get('lot');
    	$aduan->no_hakmilik		= $request->get('hakmilik');
    	$aduan->nama_pengadu	= $request->get('pengadu');
    	$aduan->no_tel 			= $request->get('no_tel');
    	$aduan->catatan 		= $request->get('catatan');
    	$aduan->maklumbalas		= $request->get('maklumbalas');
    	$aduan->pemaklum		= $request->get('pemaklum');
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
		return view('aduan.index',compact('rep','staff','lot','sa'));
	}

	public function update($id, Request $request)
	{
		$aduan = Aduan::find($id);

    	$aduan->no_aduan		= $request->get('aduan');
    	$aduan->tarikh_terima	= $request->get('tarikh_terima');
    	$aduan->tarikh_selesai	= $request->get('tarikh_selesai');
    	$aduan->masa_terima		= $request->get('masa');
    	$aduan->id_staff		= $request->get('staff');
    	$aduan->id_lot			= $request->get('lot');
    	$aduan->no_hakmilik		= $request->get('hakmilik');
    	$aduan->nama_pengadu	= $request->get('pengadu');
    	$aduan->no_tel 			= $request->get('no_tel');
    	$aduan->catatan 		= $request->get('catatan');
    	$aduan->maklumbalas		= $request->get('maklumbalas');
    	$aduan->pemaklum		= $request->get('pemaklum');
    	$aduan->status_aduan	= $request->get('status');

    	$aduan->save();
    	return redirect()->route('aduan.index');
	}
}
