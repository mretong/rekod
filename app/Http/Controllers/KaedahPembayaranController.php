<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KaedahPembayaran;

class KaedahPembayaranController extends Controller
{
    public function index()
    {
    	$bayar = KaedahPembayaran::all();
    	return view('kaedah_pembayaran.index',compact('bayar'));
    }

    public function create()
    {
    	return view('kaedah_pembayaran.create');
    }

    public function store(Request $request)
    {
    	$bayar = new KaedahPembayaran;

    	$bayar->nama = $request->get('nama');
    	$bayar->kod  = $request->get('kod');

    	$bayar->save();

    	return redirect()->route('kaedah_pembayaran.index');
    }

    public function destroy($id)
    {
    	$bayar = KaedahPembayaran::find($id);
    	$bayar->delete();

    	return redirect()->route('kaedah_pembayaran.index');
    }

    public function show($id)
    {
    	$pay = KaedahPembayaran::findOrFail($id);

    	return view('kaedah_pembayaran.show',compact('pay'));
    }

    public function update($id, Request $request)
    {
    	$bayar = KaedahPembayaran::find($id);

    	$bayar->nama = $request->get('nama');
    	$bayar->kod  = $request->get('kod');

    	$bayar->save();
    	return redirect()->route('kaedah_pembayaran.index');
    }

}
