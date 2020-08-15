@extends('admin/layouts-admin/index')
@section('content')
<!-- Page Content -->

<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
            <div class ="col-lg-12">
            <h3 class="page-header">Chi tiết Đơn Hàng.</h3>
            <button
                onclick="window.location.href = '{{ URL::to('admin/order/management_order') }}'"
             class="btn btn-primary btn-sm">Trở Về</button>
            </div>
                <div class="col-lg-12">
                    <h3 class="page-header">Thông Tin
                        <small>Khách Hàng</small>
                    </h3>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Mã Hóa Đơn</th>
                            <th>Tên Khách Hàng</th>
                            <th>Số Điện Thoại</th>
                            <th>Email Khách Hàng</th>
                            <th>Địa Chỉ Khách Hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>{{$order_by_customer ->Orderid }}</td>
                            <td>{{$order_by_customer ->Customername }}</td>
                            <td>{{$order_by_customer ->Customerphone }}</td>
                            <td>{{$order_by_customer ->Customeremail }}</td>
                            <td>{{$order_by_customer ->Customeraddress }}</td>
                        </tr>
                    </tbody>
                </table>

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
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>{{$order_by_customer ->RecipientName }}</td>
                            <td>{{$order_by_customer ->RecipientPhone }}</td>
                            <td>{{$order_by_customer ->RecipientEmail }}</td>
                            <td>{{$order_by_customer ->RecipientAddress }}</td>
                            <td>{{$order_by_customer ->RecipientNote }}</td>
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
                            <th>Mã Chi Tiết Hóa Đơn</th>
                            <th>Mã Sản Phẩm</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_by_cart as $key => $info_cart)
                        <tr class="odd gradeX">
                            <td>{{$info_cart -> Orderdetailsid}}</td>
                            <td>{{$info_cart -> Productid}}</td>
                            <td>{{$info_cart -> Productname}}</td>
                            <td>{{$info_cart -> Productprice}}</td>
                            <td>{{$info_cart -> Quantity}}</td>
                        </tr>
                        @endforeach
                        <tr class="odd gradeX">
                            <td colspan="4" align="center">Tổng Đơn Hàng</td>
                            <td>{{$order_by_customer ->TotalMoney }}$</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection