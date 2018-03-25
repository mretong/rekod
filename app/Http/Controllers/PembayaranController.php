<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Bank;
use App\Perbicaraan;
use App\Pemilik;
use App\KaedahPembayaran;
use App\StatusPembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
    	$bayar = Pembayaran::paginate(10);
        $pemilik = DB::table('pemilik','pembayaran')
            ->join()
    	return view('pembayaran.index',compact('bayar','pemilik'));
    }

    public function create()
    {
    	$bank = Bank::pluck('nama','id');
        $bicara = Perbicaraan::pluck('id_lot','id');
        $kaedah = KaedahPembayaran::pluck('nama','id');
        $status = StatusPembayaran::pluck('nama','id');
        $pemilik = Pemilik::pluck('nama','id');
        
    	return view('pembayaran.create',compact('bank','bicara','kaedah','status','pemilik'));
    }

    public function store(Request $request)
    {
    	$bayar = new Pembayaran;

        $bayar->id_pemilik      = $request->get('id_pemilik');
    	$bayar->id_bank 		= $request->get('id_bank');
    	$bayar->id_perbicaraan	= $request->get('id_perbicaraan');
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
        $bank = Bank::pluck('nama','id');
        $bicara = Perbicaraan::pluck('id_lot','id');
        $kaedah = KaedahPembayaran::pluck('nama','id');
        $status = StatusPembayaran::pluck('nama','id');
        $pemilik = Pemilik::pluck('nama','id');

    	return view('pembayaran.show',compact('pay','bank','bicara','kaedah','status','pemilik'));
    }

    public function update($id, Request $request)
    {
    	$bayar = Pembayaran::find($id);

    	$bayar->id_pemilik      = $request->get('id_pemilik');
        $bayar->id_bank         = $request->get('id_bank');
        $bayar->id_perbicaraan  = $request->get('id_perbicaraan');
        $bayar->no_akaun        = $request->get('no_akaun');
        $bayar->kaedah_bayaran  = $request->get('kaedah_bayaran');
        $bayar->no_baucer       = $request->get('no_baucer');
        $bayar->attachment      = $request->get('attachment');
        $bayar->tarikh_baucer   = $request->get('tarikh_baucer');
        $bayar->no_cek          = $request->get('no_cek');
        $bayar->tarikh_cek      = $request->get('tarikh_cek');
        $bayar->rujukan         = $request->get('rujukan');
        $bayar->catatan         = $request->get('catatan');
        $bayar->status          = $request->get('status');
        $bayar->rujukan_denda   = $request->get('rujukan_denda');
        $bayar->tarikh_denda    = $request->get('tarikh_denda');

    	$bayar->save();

    	return redirect()->route('pembayaran.index');
    }
}
