<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Carbon\Carbon;
session_start();

class CartController extends Controller
{
    public function save_cart_index(Request $request){
        $productid = $request->product_hidden_id;
        $product_info = DB::table('product')->where('Productid', $productid)->first();
        $data['id'] = $product_info->Productid;
        $data['qty'] = 1;
        $data['name'] = $product_info->Productname;
        $data['price'] = $product_info->Price;
        $data['weight'] = $product_info->Price;
        $data['options']['image'] = $product_info->Image;
        $data['options']['description'] = $product_info->ProductDescription;
        Cart::add($data);
        // Cart::destroy();
        // return Redirect::to('/show_cart');
        return redirect()->back();
    }
    public function save_cart_details(Request $request){
        $productid = $request->productid_hidden;
        $quantity = $request->qty;
        
        $product_info = DB::table('product')->where('Productid', $productid)->first();
        $data['id'] = $product_info->Productid;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->Productname;
        $data['price'] = $product_info->Price;
        $data['weight'] = $product_info->Price;
        $data['options']['image'] = $product_info->Image;
        $data['options']['description'] = $product_info->ProductDescription;
        Cart::add($data);
        // Cart::destroy();
        // return Redirect::to('/show_cart');
        return redirect()->back();
    }
    public function show_cart(){
        return view('frontend.Cart.Cart-list');
    }
    public function show_order($Ctmid){
        $order_by_customer = DB::table('ordermaster')
        ->where('Customerid',$Ctmid)
        ->get();

        // echo '<pre>';
        // print_r($order_by_customer);
        // echo '</pre>';
        $management_order_customer = view('frontend.Cart.Vieworder') ->with('order_by_customer', $order_by_customer);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Vieworder', $management_order_customer);
    }
    public function details_order($Orderid){
        // lấy thông tin giao hàng
        $order_by_customer = DB::table('ordermaster')
        ->where('Orderid',$Orderid)
        ->first();
        // ----------------------------------------------------
        // lấy thông tin giỏ hàng của khách
        $order_by_cart  = DB::table('orderdetails')
        ->where('Orderid', $Orderid)
        ->get();
        $management_order_customer = view('frontend.Cart.Details_order') ->with('order_by_customer', $order_by_customer)->with('order_by_cart', $order_by_cart);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Details_order', $management_order_customer);
    }
    public function edit_order_address($orderid){
        $info_address = DB::table('ordermaster')
        ->where('Orderid', $orderid)
        ->first();
        $management_order_customer = view('frontend.Cart.Edit_order_address') ->with('info_address', $info_address);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Edit_order_address', $management_order_customer);
    }

    public function edit_product_order($productid){
        $info_product1 = DB::table('orderdetails')
        ->where('Productid', $productid)
        ->first();

        $info_product2 = DB::table('product')
        ->where('Productid', $productid)
        ->first();
        
        $management_order_customer = view('frontend.Cart.Edit_product_order') ->with('info_product1', $info_product1)->with('info_product2', $info_product2);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Edit_product_order', $management_order_customer);
    }

    public function update_order_address(Request $request,$orderid)
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $data = array();
        $data['Orderid'] = $orderid;
        $data['Customerid'] = $request->Customerid;
        $data['RecipientName'] = $request->Recipient_Name;
        $data['RecipientPhone'] = $request->Recipient_Phone;
        $data['RecipientEmail'] = $request->Recipient_Email;
        $data['RecipientAddress'] = $request->Recipient_Address;
        $data['RecipientNote'] = $request->cart_note;
        $data['TotalMoney'] = $request->total;
        $data['OrderDate'] = $dt->toDateTimeString();

        DB::table('ordermaster')->where('Orderid',$orderid)->update($data);
        // return Redirect::back();
        return Redirect::to('details_order/'.$orderid);
    }
    public function delete_order($orderid){
        DB::table('ordermaster')->where('Orderid',$orderid)->delete();
        DB::table('orderdetails')->where('Orderid',$orderid)->delete();
        return redirect()->back();
    }
    // public function delete_product_order($orderdetailsid){
    //     DB::table('orderdetails')->where('Orderdetailsid',$orderdetailsid)->delete();
    //     return redirect()->back();
    // }

    public function update_cart_qty(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show_cart');
    }
    public function delete_to_cart($rowId){
        Cart::update($rowId, 0);
        return Redirect::to('/show_cart');
    }
    public function delete_to_cart_index($rowId){
        Cart::update($rowId, 0);
        return redirect()->back();
    }
    public function Checkout_Cart(){
        $Ctmid = Session::get('khach_hang_dn')->Customerid;
        $customer_info = DB::table('customer')
        ->where('Customerid',$Ctmid)
        ->first();
        // echo '<pre>';
        // print_r($customer_info  );
        // echo '</pre>';
        // return view('frontend.Cart.Checkout');
        $Ctm_info = view('frontend.Cart.Checkout') ->with('customer_info', $customer_info);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Checkout', $Ctm_info);
    }
    public function save_Delivery_address(Request $request){
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $data = array();
        $data['Customerid'] = $request->Customerid;
        $data['RecipientName'] = $request->Recipient_Name;
        $data['RecipientPhone'] = $request->Recipient_Phone;
        $data['RecipientEmail'] = $request->Recipient_Email;
        $data['RecipientAddress'] = $request->Recipient_Address;
        $data['RecipientNote'] = $request->cart_note;
        $data['TotalMoney'] = $request->total;
        $data['OrderDate'] = $dt->toDateTimeString();
        $Recipien_info = DB::table('ordermaster')->insertGetId($data);
        Session::put('Orderid',$Recipien_info);
        
        return Redirect::to('Invoice_Cart');
    }
    public function save_order(Request $request){
        $id_order = Session::get('Orderid');
        $content = Cart::content();
        foreach($content as $v_content ){
            $Odata['Orderid'] = $id_order;
            $Odata['Productid'] = $v_content->id;
            $Odata['Productname'] = $v_content->name;
            $Odata['Productprice'] = $v_content->price;
            $Odata['Quantity'] = $v_content->qty;
            DB::table('orderdetails')->insert($Odata);
        }
        return view('frontend.Cart.notification_cart');
    }
    public function Invoice_Cart(){
        $Orderid = Session::get('Orderid');
        $order_by_info = DB::table('ordermaster')
        ->join('customer', 'customer.Customerid', '=', 'ordermaster.Customerid')
        ->select('ordermaster.*','customer.*')
        ->where('Orderid',$Orderid)
        ->first();
        // echo '<pre>';
        // print_r($order_by_info);
        // echo '</pre>';
        $order_info = view('frontend.Cart.Invoice') ->with('order_by_info', $order_by_info);
        return view('layouts.app_master_frontend')->with('frontend.Cart.Invoice', $order_info);
    }
}
