@extends('layouts.app_master_frontend')
@section('content')
<!-- Page Content -->
<div class="invoice-box">
    <div class="billing-details" id="billing-details">
 
        <div class="section-title">
            <h3 class="title">Thông tin khách hàng</h3>
        </div>

        <div class="form-group"> 
            <label>Tên đăng nhập</label>
            <input class="input" type="text" readonly value="{{$info_customer -> Customername}}">
        </div>

        <div class="form-group">
            <label>Email.</label>
            <input class="input" type="email" readonly value="{{$info_customer -> Customeremail}}">
        </div>

        <div class="form-group">
            <label>Địa chỉ</label>
            <input class="input" type="text" readonly value="{{$info_customer -> Customeraddress}}">
        </div>

        <div class="form-group">
            <label>Số điện thoại</label>
            <input class="input" type="tel" readonly value="{{$info_customer -> Customerphone}}">
        </div>

    </div>
    </div>
@stop