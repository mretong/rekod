<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilik;

class SearchController extends Controller
{
	// public function __construct(){
	// 	$this->beforeFilter('auth', array('except'=>'getLogin'));
	// }

	public function index(){
		// dd('here');
		return view('carian.index');
	}

    public function getNoLot(Request $request){

    	$msg = Pemilik::where('no_kp',$request->get('no_ic'));
    	return response()->json(array('msg'=>$msg),200);
    }

    

}
