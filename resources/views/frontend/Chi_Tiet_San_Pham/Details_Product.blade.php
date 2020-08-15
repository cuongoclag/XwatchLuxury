@extends('layouts.app_master_frontend')
@section('content')
@foreach($details_product as $key => $dp)
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="{{asset('frontend/dist/img/Nam/'.$dp -> Image)}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2">
                <div id="product-imgs">
                    <div class="product-preview">
                        <img src="{{asset('frontend/dist/img/Nam/'.$dp -> Image)}}" alt="">
                    </div>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name">{{$dp -> Productname}} </h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="product-price">{{ $dp -> Price }}$</h3>
                    </div>
                

                    <!-- <div class="product-options">
                        <label>
                            Size
                            <select class="input-select">
                                <option value="0">X</option>
                            </select>
                        </label>
                        <label>
                            Color
                            <select class="input-select">
                                <option value="0">Red</option>
                            </select>
                        </label>
                    </div> -->
                    
                    <form action="{{ URL::to('/save_cart_details')}}" method="post">
                    {{ csrf_field() }}
                    <div class="add-to-cart">
                        <div class="qty-label">
                            Số lượng
                            <div class="input-number">
                                <input type="number" name="qty" min="1" max = "10" value="1">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                                <input name="productid_hidden" type="hidden" value="{{$dp->Productid}}">
                            </div>
                        </div>
                        <button type="submit" class="add-to-cart-btn" onclick="return confirm('Bạn có chắc muốn cho vào giỏ hàng?')">
                            <i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng

                        </button>
                    </div>
                    </form>

                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Mô Tả</a></li>
                        <li><a data-toggle="tab" href="#tab3">Phản Hồi</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active" style="text-align:center">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $dp -> ProductDescription }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">

                                <!-- Review Form -->
                                <div class="col-md-12" style="text-align:center;">
                                    @if(Session::has('khach_hang_dn'))
                                    <div id="review-form" >
                                        <form class="review-form" method="post" action="{{route('feedback')}}">
                                        @csrf
                                            <input class="hidden" type="text" name="Customerid" value="{{Session::get('khach_hang_dn')->Customerid}}">
                                            <input class="input" type="text" name="title" id="title" placeholder="Tiều Đề Đánh Giá"> 
                                            <input class="input" type="text" name="comment" id="comment" placeholder="Review của bạn">
                                            <button class="primary-btn">Xác Nhận</button>
                                        </form>
                                    </div>
                                        @else
                                            @if(Session::has('khach_hang_dn') == null)
                                            <!-- <div id="review-form" >
                                                <form class="review-form" method="post" action="{{route('feedback')}}">
                                                @csrf
                                                    <input class="input" type="text" name="title" id="title" placeholder="Tiều Đề Đánh Giá"> 
                                                    <input class="input" type="text" name="comment" id="comment" placeholder="Review của bạn">
                                                    <button class="primary-btn">Xác Nhận</button>
                                                </form>
                                            </div> -->
                                            <h2>Bạn muốn phản hồi thì bạn phải đăng nhập</h2>
                                            <br>
                                            <a href="{{route('getlogin')}}" class="cn c_white" style="color: red"><i class="fa fa-user cn c_white"></i> Đăng nhập tại đây</a>
                                        @endif
                                    @endif
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endforeach
<!-- /SECTION -->
@stop