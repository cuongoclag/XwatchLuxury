<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\feedback;

use Illuminate\Support\Facades\DB;
class DetailsProductController extends FrontendController
{
    public function index(){
        return view('frontend.Chi_Tiet_San_Pham.Details_Product');
    }
    public function Feedback(Request $request){
    	DB::table('feedback')->insert([ 
    		'Title'=>$request->title,
    		'Comment'=>$request->comment,
        ]);
        return redirect()->back();  	
    }

}
