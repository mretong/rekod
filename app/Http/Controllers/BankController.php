<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    public function index()
    {
    	$bank = Bank::paginate(10);
    	return view('bank.index',compact('bank'));
    }

    public function create()
    {
    	return view('bank.create');
    }

    public function store(Request $request)
    {
    	$bank = new Bank;

    	$bank->nama = $request->get('nama');
    	$bank->kod 	= $request->get('kod');

    	$bank->save();

    	return redirect()->route('bank.index');
    }

    public function destroy($id)
    {
    	$bank = Bank::find($id);
    	$bank->delete();

    	return redirect()->route('bank.index');
    }

    public function show($id)
    {
    	$banks = Bank::findOrFail($id);

    	return view('bank.show',compact('banks'));
    }

    public function update($id, Request $request)
    {
    	$bank = Bank::find($id);

    	$bank->nama = $request->get('nama');
    	$bank->kod 	= $request->get('kod');

    	$bank->save();

    	return redirect()->route('bank.index');
    }
}
