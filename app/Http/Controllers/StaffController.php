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

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();

        return redirect()->route('staff.index');
    }

    public function show($id)
    {
        $pic = Staff::findOrFail($id);
        return view('staff.show',compact('pic'));
    }

    public function update($id, Request $request)
    {
        $staff = Staff::find($id);

        $staff->no_pekerja = $request->get('no_pekerja');
        $staff->nama = $request->get('nama');

        $staff->save();
        return redirect()->route('staff.index');
    }

}
