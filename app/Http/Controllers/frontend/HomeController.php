<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
        // $list_product = DB::table('product')
        // ->join('typeproduct','typeproduct.Typeid','=','product.Typeid')
        // ->orderby('product.Typeid','desc')
        // ->get();

        $hot_product = DB::table('product')
        ->orderby('Productid','desc')
        ->where('Hot',1)
        ->where('Status',1)
        ->limit(8)
        ->get();
        return view('frontend.home.index_frontend')->with('hot_product',$hot_product);
    }
}