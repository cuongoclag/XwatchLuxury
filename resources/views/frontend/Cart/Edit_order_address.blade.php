@extends('layouts.app_master_frontend')
@section('content')
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="invoice-box" align="center">
            <h4 class="breadcrumb-header">Chỉnh Sửa Địa Chỉ Giao Hàng.</h4>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->
<div class="container">
    <div class="invoice-box">
    <form action="{{ URL::to('/update_order_address/'.$info_address->Orderid) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Tên Người Nhận</label>
            <input class="input" type="text" name="Recipient_Name" placeholder="Tên" title="Nhập tên người Nhận." 
            pattern="[a-zA-Z]+" required value="{{ $info_address -> RecipientName}}">
        </div>
        <div class="form-group">
            <label>Email Người Nhận</label>
            <input class="input" type="email" name="Recipient_Email" placeholder="Email" title="Nhập Email người nhận." 
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="{{ $info_address -> RecipientEmail}}">
        </div>
        <div class="form-group">
            <label>Địa Chỉ Người Nhận</label>
            <input class="input" type="text" name="Recipient_Address" placeholder="Địa Chỉ" title="Nhập Địa chỉ người nhận." 
            pattern="[A-Za-z0-9'\.\-\s\,]" required value="{{ $info_address -> RecipientAddress}}">
        </div>
        <div class="form-group">
            <label>Số Điện Thoại Người Nhận</label>
            <input class="input" type="text" name="Recipient_Phone" placeholder="Số Điện Thoại" title="Nhập Số ĐT người nhận (gồm 10 hoặc 11 chữ số)" 
            pattern="[0-9]{10,11}" required value="{{ $info_address -> RecipientPhone}}">
        </div>
        <div class="order-notes">
            <label>Ghi Chú</label>
            <textarea class="input" name="cart_note" placeholder="Ghi Chú" required>{{ $info_address -> RecipientNote}}</textarea>
        </div>
        <div class="form-group">
            <input class="hidden" type="text" name="Customerid" value="{{$info_address->Customerid}}"> 
        </div>
        <div class="form-group">
            <input class="hidden" type="number" name="total" value="{{$info_address -> TotalMoney}}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Xác Nhận</button>
    </form>
    </div>
</div>

@stop