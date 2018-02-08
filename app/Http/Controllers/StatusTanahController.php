<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusTanah;

class StatusTanahController extends Controller
{
	public function index()
	{
	    $tanah = StatusTanah::all();
	    return view('tanah.index',compact('tanah'));
	}

	public function create()
	{
		return view('tanah.create');
	}

	public function store(Request $request)
	{
		$tanah = new StatusTanah;

		$tanah->nama = $request->get('nama');
		$tanah->kod = $request->get('kod');

		$tanah->save();
		return redirect()->route('tanah.index');
	}

	public function destroy($id)
	{
		$tanah = StatusTanah::find($id);
		$tanah->delete();

		return redirect()->route('tanah.index');
	}

	public function show($id)
	{
		$land = StatusTanah::findOrFail($id);
		return view('tanah.show',compact('land'));
	}

	public function update($id, Request $request)
	{
		$tanah = StatusTanah::find($id);

		$tanah->nama = $request->get('nama');
		$tanah->kod = $request->get('kod');

		$tanah->save();
		return redirect()->route('tanah.index');
	}
}
