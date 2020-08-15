@extends('layouts.app_master_frontend')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Hãng</h3>
                    <div class="checkbox-filter">
                    @foreach ($type as $key => $t)
                        <div class="input-checkbox">
                            <input type="checkbox" id="brand-1">
                            <label for="brand-1">
                                <span></span> 
                                <a href="{{URL::to('/danh-muc-san-pham/'.$t->Typeid)}}">{{ $t -> Typename }}</a>
                            </label>
                        </div>
                    @endforeach
                    </div>
                </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                <form style="float:right">
                    <div class="input-group mt-3 mb-3">
                        <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" style="font-weight: bold; width: 200px">
                         Sắp xếp theo giá
                        </button>
                            <div class="dropdown-menu" style="text-align:center; width: 200px">
                            <a class="dropdown-item" href="?sort=1" style="font-size: 15px">Giá Giảm Dần</a>
                            </br>
                            <a class="dropdown-item" href="?sort=2" style="font-size: 15px">Giá Tăng Dần</a>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="store-sort">
                    <h4 class="title">Đồng Hồ</h4>
                    </div>
                </div>
                <!-- /store top filter -->
                <!-- store products -->
                <div class="row">
                    <!-- product -->
                    @foreach($type_by_id as $key => $ti)
                    <div class="col-md-4">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{asset('frontend/dist/img/Nam/'.$ti -> Image)}}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="#">{{ $ti -> Productname}}</a></h3>
                                <h4 class="product-price">{{ $ti -> Price }}$</h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-btns">
                                    <button onclick="window.location.href = '{{ URL::to('/Details-Product/'.$ti-> Productid) }}'" class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Xem Chi tiết</span></button>
                                </div>
                            </div>
                            <form action="{{ URL::to('/save_cart_index')}}" method = "post" onclick="return confirm('Bạn có chắc muốn cho vào giỏ hàng?')">
                            {{ csrf_field() }}
                            <div class="add-to-cart">
                                <input name="product_hidden_id" type="hidden" value="{{ $ti->Productid }}">
                        <button type="submit" class="add-to-cart-btn">
                            <i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng
                        </button>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    <!-- /product -->
                </div>
                <!-- /store products -->
                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <ul class="store-pagination">
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@stop