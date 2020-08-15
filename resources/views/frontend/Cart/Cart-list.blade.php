@extends('layouts.app_master_frontend')
@section('content')
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumb-header">Giỏ Hàng</h4>
                <!-- <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active">Giỏ Hàng</li>
                </ul> -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="container">
    <?php 
        $content = Cart::content();
        // echo '<pre>';
        // print_r($content);
        // echo '</pre>';
    ?>
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
            @foreach($content as $v_content)
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs">
                            <!-- <img src="{{ URL::to('public/frontend/dist/img/Nam/' )}}" width ="50" alt="..." class="img-responsive"/> -->
                            <img src="{{asset('frontend/dist/img/Nam/'.$v_content -> options->image)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{ $v_content->name }}</h4>
                            <p>ID:{{$v_content->id}} </p>
                            <p>Description: {{ $v_content->options->description }}</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ number_format($v_content->price).' ' .'$'  }}</td>
                <td data-th="Quantity">
                    <form action="{{ URl::to('/update_cart_qty') }}" method ="POST">
                        {{ csrf_field() }}
                        <input type="number" name="cart_quantity" class="form-control text-center" value="{{ $v_content->qty }}">
                        <input type="hidden" value ="{{$v_content->rowId}}" name="rowId_cart" class="from-control">
                        <input type="submit" value ="update" name="update_qty" class="btn btn-danger btn-sm">
                    </form>
                </td>
                <td data-th="Subtotal" class="text-center">
                    <?php 
                        $subtotal = $v_content->price * $v_content->qty;
                        echo number_format( $subtotal).' '.'$';
                    ?>
                </td>
                <td class="actions">
                    <a class="btn btn-danger btn-sm" href="{{URL::to('/delete_to_cart/'.$v_content->rowId) }}"><i class="fa fa-trash-o"></i></a>						
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td><a href="{{ route('frontend.home.index_frontend') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>Tiếp Tục Mua Hàng</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Tổng: </strong><span> {{ Cart::priceTotal() }} $ </span></td>
                <td><a href="{{URL::to('Checklogin')}}" class="btn btn-success btn-block">Thanh Toán<i class="fa fa-angle-right"></i></a></td>
            </tr>
        </tfoot>
    </table>
</div>
@stop