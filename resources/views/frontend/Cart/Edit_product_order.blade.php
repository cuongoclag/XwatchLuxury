@extends('layouts.app_master_frontend')
@section('content')
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <h4 class="breadcrumb-header">Giỏ Hàng</h4>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="container">
	<table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Sản Phẩm</th>
                <th style="width:10%">Giá</th>
                <th style="width:8%">Số Lượng</th>
                <th style="width:22%" class="text-center">Tổng Giá</th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <!-- <img src="{{ URL::to('public/frontend/dist/img/Nam/' )}}" width ="50" alt="..." class="img-responsive"/> -->
                            <img src="{{asset('frontend/dist/img/Nam/$info_product2->Image')}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{ $info_product2->Productname }}</h4>
                            <p>ID:{{ $info_product2->Productid }} </p>
                            <p>Description: {{ $info_product2->ProductDescription }}</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ number_format($info_product2->Price).' ' .'$'  }}</td>
                <td data-th="Quantity">
                    <form action="#" >
                        {{ csrf_field() }}
                        <input type="number" name="cart_quantity" class="form-control text-center" value="{{ $info_product1->Quantity }}">
                        <input type="hidden" value ="{{ $info_product1->Orderdetailsid }}" name="iddetails" class="from-control">
                        <input type="submit" value ="update" name="update_qty" class="btn btn-danger btn-sm">
                    </form>
                </td>
                <td data-th="Subtotal" class="text-center">
                    {{ $info_product1->Productprice }}
                </td>
                <td class="actions">
                    <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash-o"></i></a>						
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td><a href="{{ route('frontend.home.index_frontend') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Tiếp Tục Mua Hàng</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Tổng: </strong>{{ $info_product1->Productprice }}$<span></span></td>
            </tr>
        </tfoot>
    </table>
</div>
@stop