<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Redirect;

use App\Penerima;

class StatusPenerimaController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$penerima = Penerima::all();
    	return view('penerima.index',compact('penerima'));
    }

    public function create()
    {
    	return view('penerima.create');
    }

    public function store(Request $request)
    {

    	$penerima = new Penerima;

    	$penerima->nama 	= $request->get('nama');
    	$penerima->kod 		= $request->get('kod');

    	$penerima->save();

    	return redirect()->route('penerima.index');
    }

    public function destroy($id)
    {
    	$penerima = Penerima::find($id);

    	if($penerima->delete()) {
            Session::flash('success', 'Berjaya. Status ini telah dihapuskan dari sistem ini.');
        } else {
            Session::flash('success', 'Berjaya. Status ini telah dihapuskan dari sistem ini.');
        }

        return redirect()->route('penerima.index');
    }

    public function show($id)
    {
    	$receiver = Penerima::findOrFail($id);

    	return view('penerima.show',compact('receiver'));
    }

    public function update($id, Request $request)
    {
    	$penerima = Penerima::find($id);

    	$penerima->nama 	= $request->get('nama');
    	$penerima->kod 		= $request->get('kod');

    	$penerima->save();

    	return redirect()->route('penerima.index');
    }
}
