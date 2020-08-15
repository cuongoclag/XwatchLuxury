@extends('layouts.app_master_frontend')
@section('content')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản Phẩm Mới</h3>
                </div>
            </div>
            <!-- /section title -->
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->
                              @foreach($hot_product as $key => $hp)
                                <div class="product">
                            <div class="product-img">
                                <img src="{{asset('frontend/dist/img/Nam/'.$hp -> Image)}}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $hp -> Productname}}</a></h3>
                                <h4 class="product-price">{{ $hp -> Price }}$</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button onclick="window.location.href = '{{ URL::to('/Details-Product/'.$hp-> Productid) }}'" 
                                    class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Xem Chi tiết</span></button>
                                </div>
                            </div>
                            <form action="{{ URL::to('/save_cart_index')}}" method = "post" onclick="return confirm('Bạn có chắc muốn cho vào giỏ hàng?')">
                            {{ csrf_field() }}
                            <div class="add-to-cart">
                                <input name="product_hidden_id" type="hidden" value="{{ $hp->Productid }}">
                        <button type="submit" class="add-to-cart-btn">
                            <i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng
                        </button>
                            </div>
                            </form>
                        </div>
                                @endforeach
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản Phẩm Hot</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <!-- product -->
                                @foreach($hot_product as $key => $hp)
                                <div class="product">
                            <div class="product-img">
                                <img src="{{asset('frontend/dist/img/Nam/'.$hp -> Image)}}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $hp -> Productname}}</a></h3>
                                <h4 class="product-price">{{ $hp -> Price }}$</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button onclick="window.location.href = '{{ URL::to('/Details-Product/'.$hp-> Productid) }}'" 
                                    class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Xem Chi tiết</span></button>
                                </div>
                            </div>
                            <form action="{{ URL::to('/save_cart_index')}}" method = "post" onclick="return confirm('Bạn có chắc muốn cho vào giỏ hàng?')">
                            {{ csrf_field() }}
                            <div class="add-to-cart">
                                <input name="product_hidden_id" type="hidden" value="{{ $hp->Productid }}">
                        <button type="submit" class="add-to-cart-btn">
                            <i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng
                        </button>
                            </div>
                            </form>
                        </div>
                                @endforeach
                                <!-- /product -->
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- Session -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="title">Hãng Sản Phẩm</h4>
                </div>
            </div>
            <!-- /section title -->
            <!-- Hang tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="trademark owl-carousel">
                        <div class="trademark_img">
                            <img src="{{ asset('frontend/dist/img/Hang/1.png')}}" alt="" >
                        </div>
                        <div class="trademark_img">
                            <img src="{{ asset('frontend/dist/img/Hang/2.png')}}" alt="" />
                        </div>
                        <div class="trademark_img">
                            <img src="{{ asset('frontend/dist/img/Hang/3.jpg')}}" alt="" />
                        </div>
                        <div class="trademark_img">
                            <img src="{{ asset('frontend/dist/img/Hang/4.jpg')}}" alt="" />
                        </div>
                        <div class="trademark_img">
                            <img src="{{ asset('frontend/dist/img/Hang/5.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hang tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Session -->
@stop