<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;


class DongHoNamController extends FrontendController
{
    public function index(Request $request){
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
        
        // $list_product = DB::table('product')
        // ->join('typeproduct','typeproduct.Typename','=','product.Typename')
        // ->orderby('product.Typename','desc')
        // ->get();

        if($request->sort)
        {
            $sort = $request->sort;
            switch($sort)
            {
                case '1':
                    $list_product = DB::table('product')->orderby('Price','desc')->where('Status',1)->limit(15)->get();
                    return  view('frontend.DH_Nam.index_DHNam')->with('type',$type)->with('list_product', $list_product);
                break;

                case '2':
                    $list_product = DB::table('product')->orderby('Price','asc')->where('Status',1)->limit(15)->get();
                    return  view('frontend.DH_Nam.index_DHNam')->with('type',$type)->with('list_product', $list_product);
                break;

                default:
                    $list_product = DB::table('product')->where('Status',1)->limit(15)->get();
                    return  view('frontend.DH_Nam.index_DHNam')->with('type',$type)->with('list_product', $list_product);
            }
        }
        $list_product = DB::table('product')->orderby('Price','desc')->where('Status',1)->limit(15)->get();

        return  view('frontend.DH_Nam.index_DHNam')->with('type',$type)->with('list_product', $list_product);
    }

    public function search(Request $request){

        $keyword = $request->key;
        $type = DB::table('typeproduct')->orderby('Typeid','desc')->get();
        $search_product = DB::table('product')->where('Status',1)->where('Productname','like','%'.$keyword.'%')->get();
        if($request->sort)
        {
            $sort = $request->sort;
            switch($sort)
            {
                case '1':
                    $search_product = DB::table('product')->orderby('Price','desc')->get();
                    return  view('frontend.tim_kiem.search')->with('type',$type)->with('search_product',$search_product);;
                break;

                case '2':
                    $search_product = DB::table('product')->orderby('Price','asc')->get();
                    return  view('frontend.tim_kiem.search')->with('type',$type)->with('search_product',$search_product);;
                break;

                default:
                    $search_product = DB::table('product')->where('Productname','like','%'.$keyword.'%')->get();
                    return  view('frontend.tim_kiem.search')->with('type',$type)->with('search_product',$search_product);;
            }
        }
        return  view('frontend.tim_kiem.search')->with('type',$type)->with('search_product',$search_product);
    }
}
