@extends('layouts.app_master_frontend')
@section('content')
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumb-header">Chi Tiết Đơn Hang Của Bạn</h4>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="container">
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <h3 class="page-header">Thông Tin
                <small>Nhận Hàng</small>
            </h3>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Tên Người Nhận</th>
                    <th>Số Điện Thoại</th>
                    <th>Email Người Nhận</th>
                    <th>Địa Chỉ Người Nhận</th>
                    <th>Ghi Chú Đơn Hàng</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX" align="center">
                    <td>{{$order_by_customer ->RecipientName }}</td>
                    <td>{{$order_by_customer ->RecipientPhone }}</td>
                    <td>{{$order_by_customer ->RecipientEmail }}</td>
                    <td>{{$order_by_customer ->RecipientAddress }}</td>
                    <td>
                        <!-- <textarea> -->
                        {{$order_by_customer ->RecipientNote }}
                        <!-- </textarea> -->
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a  href="{{URL::to('edit_order_address/'.$order_by_customer->Orderid)}}">Chỉnh Sửa</a></td>              
                </tr>
            </tbody>
        </table>
        <div class="col-lg-12">
            <h3 class="page-header">Giỏ
                <small>Hàng</small>
            </h3>
        </div>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng Tiền</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order_by_cart as $key => $info_cart)
                <tr class="odd gradeX" align="center">
                    <td>{{$info_cart -> Productname}}</td>
                    <td>{{$info_cart -> Productid}}</td>
                    <td>{{$info_cart -> Productprice}}</td>
                    <td>{{$info_cart -> Quantity}}</td>
                    <td>
                        <?php
                            $subtotal = $info_cart -> Quantity * $info_cart -> Productprice;
                            echo number_format( $subtotal).' '.'$';
                        ?>
                    </td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a  href="{{URL::to('edit_product_order/'.$info_cart->Productid)}}">Chỉnh Sửa</a></td>
                </tr>
                @endforeach
                <tr class="odd gradeX" align="center">
                    <td colspan="4">Tổng Đơn Hàng</td>
                    <td>{{$order_by_customer ->TotalMoney }}$</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="invoice-box" align="center">
        <a href="{{URL::to('show_order/'.$Ctmid = Session::get('khach_hang_dn')->Customerid)}}" class="btn btn-primary"><i class="fa fa-backward"></i>Quay Lại</a>
    </div>
</div>
@stop