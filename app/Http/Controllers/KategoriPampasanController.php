<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPampasan;

class KategoriPampasanController extends Controller
{
    public function index()
    {
    	$kategori = KategoriPampasan::all();

    	return view('kategori.index',compact('kategori'));
    }

    public function create()
    {
    	return view('kategori.create');
    }

    public function store(Request $request)
    {
    	$kategori = new KategoriPampasan;

    	$kategori->nama = $request->get('nama'); 
    	$kategori->kod  = $request->get('kod');

    	$kategori->save();

    	return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
    	$kategori = KategoriPampasan::find($id);

    	$kategori->delete();

    	return redirect()->route('kategori.index');
    }

    public function show($id)
    {
    	$list = KategoriPampasan::findOrFail($id);

    	return view('kategori.show',compact('list'));
    }

    public function update($id, Request $request)
    {
    	$kategori = KategoriPampasan::find($id);

    	$kategori->nama = $request->get('nama');
    	$kategori->kod  = $request->get('kod');

    	$kategori->save();

    	return redirect()->route('kategori.index');
    }
}
