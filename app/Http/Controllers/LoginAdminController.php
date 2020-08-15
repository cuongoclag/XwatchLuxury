<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\accountList;

use Illuminate\Support\Facades\DB;
use Session;
session_start();
class LoginAdminController extends Controller
{
    public function getLogin_index(){
        return view('admin/login');
    }
    public function getlogin_admin(Request $request)
    {
    	$user = $request->username;
    	$pass = $request->password;
    	
		$admin = accountlist::where('Username', $user)->where('Password', $pass)->first();
		
		if($admin){
			$request->session()->put('admin_dn', $admin);
			if($request->has('Th_Ghi_nho'))
			return redirect('admin/typeproduct/typeproduct-list')->cookie('admin_dn',$admin);
			return redirect('admin/typeproduct/typeproduct-list');
		}
			return redirect('admin/login')->with('alert','Đăng nhập không thành công');
    }
    public function getlogout_admin(Request $request){
		$request->session()->Flush();
		$cookie = \Cookie::forget('admin_dn');
		return redirect('admin/login')->withCookie($cookie);
	}
}
