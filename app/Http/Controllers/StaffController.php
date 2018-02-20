<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Ptj;

class StaffController extends Controller
{
    public function index()
    {
    	$staff = Staff::all();
    	return view('staff.index',compact('staff'));
    }

    public function create()
    {
        $ptj = Ptj::pluck('nama','kod');
    	return view('staff.create',compact('ptj'));
    }

    public function store(Request $request)
    {
    	$staff = new Staff;

    	$staff->no_pekerja 	= $request->get('no_pekerja');
    	$staff->nama 		= $request->get('nama');
        $staff->id_ptj      = $request->get('id_ptj');

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
        $ptj = Ptj::pluck('nama','kod');
        
        return view('staff.show',compact('pic','ptj'));
    }

    public function update($id, Request $request)
    {
        $staff = Staff::find($id);

        $staff->no_pekerja  = $request->get('no_pekerja');
        $staff->nama        = $request->get('nama');
        $staff->id_ptj         = $request->get('id_ptj');

        $staff->save();
        return redirect()->route('staff.index');
    }

}
