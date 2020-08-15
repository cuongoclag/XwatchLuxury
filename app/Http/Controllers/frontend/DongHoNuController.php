<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class DongHoNuController extends FrontendController
{
    public function index(){
            $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
            
            // $list_product = DB::table('product')
            // ->join('typeproduct','typeproduct.Typename','=','product.Typename')
            // ->orderby('product.Typename','desc')
            // ->get();
    
            $list_product = DB::table('product')->orderby('Productid','desc')->limit(10)->get();
    
            return  view('frontend.DH_Nu.index_DHNu')->with('type',$type)->with('list_product', $list_product);
    }
}
