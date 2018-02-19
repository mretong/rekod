<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use Session;
use Redirect;

use App\Negeri;

class NegeriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$negeri = Negeri::all();
    	return view('negeri.index',compact('negeri'));
    }

    public function create()
    {
    	return view('negeri.create');
    }

    public function store(Request $request)
    {
        if(Auth::user()->status == 0)
        {
            Session::flush();
            Session::flash('error', 'Ralat.');
            Auth::logout();
            return redirect()->route('login');
        }

        if($request->get('nama') != '')
        {
            $nama = Negeri::where('nama', $request->get('nama'))->first();

            if($nama != null)
            {
                Session::flash('error', 'Negeri ini telah wujud. Sila buat carian untuk pengemaskinian. (eg: penambahan atau pengurangan acara)');
                return back()->withInput($request->all());
            }
        }
    	
        $validation = Validator::make($request->all(), [
            'nama'      => 'required|min:4',
            'kod'      => 'required|min:3',
        ]);

        if($validation->fails()){
            Session::flash('error', 'Ruangan Nama Negeri dan kod negeri adalah wajib diisi. <br />Perlu diisi dengan format yang betul');
            return back()->withInput($request->all());
        }

        // $negeri = new Negeri;
    	// $negeri->nama         =   $request->get('nama');
        // $negeri->kod          =   $request->get('kod');
        // $negeri->save();
        // return redirect()->route('negeri.index');
    }

    public function destroy($id)
    {
    	$negeri = Negeri::find($id);
        
        if($negeri->delete()) {
            Session::flash('success', 'Berjaya. Negeri ini telah dihapuskan dari sistem ini.');
        } else {
            Session::flash('success', 'Berjaya. Negeri ini telah dihapuskan dari sistem ini.');
        }

        return redirect()->route('negeri.index');
    }

    public function show($id)
    {
    	$state = Negeri::findOrFail($id);
        return view('negeri.show', compact('state'));
    }

    public function update($id, Request $request)
    {
        $negeri = Negeri::find($id);

        $negeri->nama         =   $request->get('nama');
        $negeri->kod          =   $request->get('kod');

        $negeri->save();

        return redirect()->route('negeri.index');
    }
}
