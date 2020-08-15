@extends('layouts.app_master_frontend')
@section('content')
<?php
?>
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumb-header">Danh Sách Đơn Hang Của Bạn</h4>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->
<div class="container">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>Mã Hóa Đơn</th>
                <th>Tên Người Nhận</th>
                <th>Điện Thoại</th>
                <th>Ngày Đặt</th>
                <th>Địa Chỉ</th>
                <th>Tổng Tiền</th>
                <th>Trạng Thái</th>
                <th>Chi Tiết</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order_by_customer as $key =>$info)
            <tr class="odd gradeX" align="center">
                <td>{{$info ->Orderid }}</td>
                <td>{{$info ->RecipientName }}</td>
                <td>{{$info ->RecipientPhone }}</td>
                <td>{{$info ->OrderDate}}</td>
                <td>{{$info ->RecipientAddress}}</td>
                <td>{{$info ->TotalMoney }}$</td>
                <td>Đang chờ xử lý</td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{URL::to('details_order/'.$info->Orderid)}}">Chi Tiết</a></td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                    <a onclick="return confirm('Are you sure to delete?')" 
                    href="{{URL::to('delete_order/'.$info->Orderid)}}">Xoá</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <div class="invoice-box" align="center">
        <a href="{{ route('frontend.home.index_frontend') }}" class="btn btn-primary"><i class="fa fa-backward"></i> Quay Lại Mua Hàng</a>
    </div>
</div>
@stop