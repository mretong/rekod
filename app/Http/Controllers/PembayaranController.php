<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Bank;
use App\Perbicaraan;
use App\KaedahPembayaran;
use App\StatusPembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
    	$bayar = Pembayaran::all();
    	return view('pembayaran.index',compact('bayar'));
    }

    public function create()
    {
    	$bank = Bank::pluck('nama','kod');
        $bicara = Perbicaraan::pluck('id_lot','id');
        $kaedah = KaedahPembayaran::pluck('nama','kod');
        $status = StatusPembayaran::pluck('nama','kod');
        
    	return view('pembayaran.create',compact('bank','bicara','kaedah','status'));
    }

    public function store(Request $request)
    {
    	$bayar = new Pembayaran;

    	$bayar->bank 			= $request->get('bank');
    	$bayar->bicara			= $request->get('bicara');
    	$bayar->no_akaun		= $request->get('no_akaun');
    	$bayar->kaedah_bayaran	= $request->get('kaedah_bayaran');
    	$bayar->no_baucer		= $request->get('no_baucer');
    	$bayar->attachment 		= $request->get('attachment');
    	$bayar->tarikh_baucer 	= $request->get('tarikh_baucer');
    	$bayar->no_cek 			= $request->get('no_cek');
    	$bayar->tarikh_cek 		= $request->get('tarikh_cek');
    	$bayar->rujukan 		= $request->get('rujukan');
    	$bayar->catatan 		= $request->get('catatan');
    	$bayar->status 			= $request->get('status');
    	$bayar->rujukan_denda 	= $request->get('rujukan_denda');
    	$bayar->tarikh_denda	= $request->get('tarikh_denda');

    	$bayar->save();
    	return redirect()->route('pembayaran.index');
    }
    
    public function destroy($id)
    {
    	$bayar = Pembayaran::find($id);
    	$bayar->delete();

    	return redirect()->route('pembayaran.index');
    }
    
    public function show($id)
    {
    	$pay = Pembayaran::findOrFail($id);

    	return view('pembayaran.show',compact('pay'));
    }

    public function update($id, Request $request)
    {
    	$bayar = Pembayaran::find($id);

    	$bayar->bank 			= $request->get('bank');
    	$bayar->bicara			= $request->get('bicara');
    	$bayar->no_akaun		= $request->get('no_akaun');
    	$bayar->kaedah_bayaran	= $request->get('kaedah_bayaran');
    	$bayar->no_baucer		= $request->get('no_baucer');
    	$bayar->attachment 		= $request->get('attachment');
    	$bayar->tarikh_baucer 	= $request->get('tarikh_baucer');
    	$bayar->no_cek 			= $request->get('no_cek');
    	$bayar->tarikh_cek 		= $request->get('tarikh_cek');
    	$bayar->rujukan 		= $request->get('rujukan');
    	$bayar->catatan 		= $request->get('catatan');
    	$bayar->status 			= $request->get('status');
    	$bayar->rujukan_denda 	= $request->get('rujukan_denda');
    	$bayar->tarikh_denda	= $request->get('tarikh_denda');

    	$bayar->save();

    	return redirect()->route('pembayaran.index');
    }
}
