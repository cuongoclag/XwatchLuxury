<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;
session_start();

class AdminCheckoutController extends Controller
{
    public function management_order(){
        // $this->AuthLogin();
        $all_order = DB::table('ordermaster')
        ->join('customer', 'ordermaster.Customerid', '=', 'customer.Customerid')
        ->select('ordermaster.Orderid','ordermaster.OrderDate','ordermaster.TotalMoney','customer.Customername','customer.Customerphone')
        ->orderby('ordermaster.Orderid','desc')
        ->get();
        $management_product = view('admin/order/management_order') ->with('all_order', $all_order);
        return view('admin/layouts-admin/index')->with('admin/order/management_order', $management_product);
    }
    // lấy dữ liệu khách hàng.
    public function order_details($orderid){
        // lấy thông tin khách hàng
        $order_by_customer  = DB::table('ordermaster')
        ->join('customer', 'customer.Customerid','=', 'ordermaster.Customerid')
        ->where('Orderid', $orderid)
        ->first();
        
        // echo '<pre>';
        // print_r($order_by_customer);
        // echo '</pre>';
        
        // ----------------------------------------------------
        // lấy thông tin giỏ hàng của khách
        $order_by_cart  = DB::table('orderdetails')
        ->where('Orderid', $orderid)
        ->get();

        // echo '<pre>';
        // print_r($order_by_cart);
        // echo '</pre>';

        $management_order_customer = view('admin/order/order_details') ->with('order_by_customer', $order_by_customer)->with('order_by_cart', $order_by_cart);
        return view('admin/layouts-admin/index')->with('admin/order/order_details', $management_order_customer);

        
    }
    public function delete_order($orderid){
        DB::table('ordermaster')->where('Orderid',$orderid)->delete();
        DB::table('orderdetails')->where('Orderid',$orderid)->delete();
        return redirect()->back();
    }
}
