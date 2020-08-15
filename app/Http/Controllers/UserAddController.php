<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserAddController extends Controller
{
    public function UserAdd(){
        return view('admin/user/user-add');
    }


    public function UserList()
    {
    //Truy vấn toàn bộ dữ liệu trong bảng customer
        $customer = DB::table('customer')->get();
        return view('admin/user/user-list')->with(['customer' => $customer]);
    }


    //delete
    public function delete_customer($user)
    {
        $member = DB::table('customer')
            ->where("Customername", $user)
            ->delete();
        return redirect()->action('UserAddController@UserList');
    }
  
    //process - Form update
    public function update($Customername){
        $rs = DB::table('customer')
            -> where('Customername',$Customername)
            ->first();
            return view('admin/user/user-edit', ['rs' => $rs]);
    }
  
    public function updateProcess(Request $request, $customer)
    {
        $Name = $request->input('username');
        $Pass = $request->input('password');
        $Email = $request->input('email');
        $Phone = $request->input('phone');
        $Address = $request->input('address');
        $rs = DB::table('customer')
            ->where('Customername', $customer)
            ->update(['Customername' => $Name, 'customerpass' => $Pass, 'Customeremail' => $Email, 'Customerphone' =>$Phone, 'Customeraddress' => $Address]);
        return redirect()->action('UserAddController@UserList');
    }
}
