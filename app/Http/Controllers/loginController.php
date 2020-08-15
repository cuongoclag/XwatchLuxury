<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\customer;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests\registerRequest;
session_start();
class loginController extends Controller
{
    public function getLogin_1(){
        return view('frontend/login/login');
    }
    public function getRegister(){
        return view('frontend/login/register');
    }
    public function getinfo(registerRequest $request){
    	
		$user = $request->username;
		$checkUser = DB::table('customer')->where('Customername', $user)->first();
		if ($checkUser) {
			return redirect('login/register/getregister')->with('alert','Tên người dùng đã tồn tại');

		}else{
			DB::table('customer')->insert([
				'Customername'=>$request->username, 
				'customerpass'=>($request->password),
				'customerpass'=>($request->confirm_password),
				'Customeremail'=>$request->email,
				'Customerphone'=>$request->phone,
				'Customeraddress'=>$request->address,
			]); 
				echo 'Đã đăng ký thành công';
    			return redirect('login/login/getlogin')->with('alert','Bạn đăng ký thành công');
		}
    	
	}
	public function getinfo_admin(Request $request){
    	
		DB::table('customer')->insert([
			'Customername'=>$request->username, 
			'customerpass'=>($request->password),
			'Customeremail'=>$request->email,
			'Customerphone'=>$request->phone,
			'Customeraddress'=>$request->address,
		]); 
			echo 'Đã đăng ký thành công';
			return redirect('admin/user/user-list')->with('alert','Bạn đăng ký thành công');
    	
    }

    public function getlogin_2(Request $request)
    {
    	$user = $request->username;
    	$pass = $request->password;
		$kh = customer::where('Customername', $user)->where('customerpass', $pass)->first();
		if($kh){
			$request->session()->put('khach_hang_dn', $kh);
			if($request->has('Th_Ghi_nho'))
			return redirect('/index-frontend/Homes')->cookie('khach_hang_dn',$kh);
			
		return redirect('/index-frontend/Homes');
		}
		return redirect('login/login/getlogin')->with('alert','Đăng nhập không thành công');
	}
	// Đăng nhập 

	public function getlogout(Request $request){
		$request->session()->Flush();
		$cookie = \Cookie::forget('khach_hang_dn');
		return redirect('/index-frontend/Homes')->withCookie($cookie);
	}

	// Login phần Cart.
	public function Checklogin(Request $request){

		if ($request->session()->has('khach_hang_dn' )) {
			return redirect('Checkout_Cart');
		}
		return redirect('login/login/getlogin');
	}

	//  function show info thông tin khách hàng.
	public function show_info($Customerid){
		$info_customer = DB::table('customer')
		->where('Customerid', $Customerid)
		->first();
		
		$management_customer = view('frontend.thong_tin.thongtin') ->with('info_customer', $info_customer);
		return view('layouts.app_master_frontend')->with('frontend.thong_tin.thongtin', $management_customer);
		
	}

	// function phản hồi khách hàng
	public function show_fb($Customerid){

        
        $info_feedback = DB::table('feedback')
		->where('Customerid', $Customerid)
		->first();
		
		$management_customer = view('frontend.phan_hoi.phanhoi') ->with('info_feedback', $info_feedback);
		return view('layouts.app_master_frontend')->with('frontend.phan_hoi.phanhoi', $management_customer);
		
	}

}
