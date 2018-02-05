<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
    	$staff = Staff::all();
    	return view('staff.index',compact('staff'));
    }

    public function create()
    {
    	return view('staff.create');
    }

    public function store(Request $request)
    {
    	$staff = new Staff;

    	$staff->no_pekerja 	= $request->get('no_pekerja');
    	$staff->nama 		= $request->get('nama');

    	$staff->save();
    	return redirect()->route('staff.index');
    }

}
