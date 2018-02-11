<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusPembayaran;

class StatusPembayaranController extends Controller
{
    public function index()
    {
    	$pembayaran = StatusPembayaran::all();
    	return view('status_pembayaran.index',compact('pembayaran'));
    }

    public function create()
    {
    	return view('status_pembayaran.create');
    }

    public function store(Request $request)
    {
    	$pembayaran = new StatusPembayaran;

    	$pembayaran->nama = $request->get('nama');
    	$pembayaran->kod  = $request->get('kod');

    	$pembayaran->save();
    	return redirect()->route('status_pembayaran.index');
    }

    public function destroy($id)
    {
    	$pembayaran = StatusPembayaran::find($id);
    	$pembayaran->delete();

    	return redirect()->route('status_pembayaran.index');
    }

    public function show($id)
    {
    	$pays = StatusPembayaran::findOrFail($id);

    	return view('status_pembayaran.show',compact('pays'));
    }

    public function update($id, Request $request)
    {
    	$pembayaran = StatusPembayaran::find($id);

    	$pembayaran->nama = $request->get('nama');
    	$pembayaran->kod  = $request->get('kod');

    	$pembayaran->save();
    	return redirect()->route('status_pembayaran.index');
    }
}
