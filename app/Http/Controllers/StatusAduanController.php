<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusAduan;

class StatusAduanController extends Controller
{
    public function index()
    {
    	$sa = StatusAduan::all();
    	return view('status_aduan.index',compact('sa'));
    }

    public function create()
    {
    	return view('status_aduan.create');
    }

    public function store(Request $request)
    {
    	$sa = new StatusAduan;

    	$sa->nama = $request->get('nama');
    	$sa->kod  = $request->get('kod');

    	$sa->save();
    	return redirect()->route('status_aduan.index');
    }

    public function destroy($id)
    {
    	$sa = StatusAduan::find($id);
    	$sa->delete();

    	return redirect()->route('status_aduan.index');
    }

    public function show($id)
    {
    	$sas = StatusAduan::findOrFail($id);

    	return view('status_aduan.show',compact('sas'));
    }

    public function update($id, Request $request)
    {
    	$sa = StatusAduan::find($id);

    	$sa->nama = $request->get('nama');
    	$sa->kod  = $request->get('kod');

    	$sa->save();

    	return redirect()->route('status_aduan.index');
    }
}
