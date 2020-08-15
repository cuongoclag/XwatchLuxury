<div class="header-ctn">
    <!-- Cart -->
    <?php 
        $content = Cart::content();
        $count = Cart::count();
        // echo '<pre>';
        // print_r($content);
        // echo '</pre>';
    ?>
    <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <i class="fa fa-shopping-cart"></i>
            <span>Giỏ Hàng</span>
            <div class="qty">{{ Cart::count() }}</div>
        </a>
        
        <div class="cart-dropdown">
            <div class="cart-list">
                @if($count == 0)
                <spen>Giỏ Hàng Trống</spen>
                @endif
                @foreach($content as $v_content)
                <div class="product-widget">
                    <div class="product-img">
                        <img src="{{asset('frontend/dist/img/Nam/'.$v_content -> options->image)}}" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-name">{{ $v_content->name }}</h3>
                        <?php 
                            $subtotal = $v_content->price * $v_content->qty;
                            echo $v_content->price;
                        ?>
                        <h4 class="product-price"><span class="qty">{{ $v_content->qty }} x </span>{{ number_format($subtotal).' ' .'$'  }}</h4>
                    </div>
                    <button class="delete" onclick="window.location.href = '{{ URL::to('/delete_to_cart_index/'.$v_content->rowId)}}'" ><i class="fa fa-close"></i></button>
                </div>
                @endforeach
            </div>
            <div class="cart-btns">
                @if($count != 0)
                <a href="{{URL::to('show_cart')}}">Xem Giỏ Hàng</a>
                @endif
                @if(Session::has('khach_hang_dn') == null && $count != 0)
                <a href="{{route('getlogin')}}">Đăng Nhập<i class="fa fa-arrow-circle-right"></i></a>
                @endif
                @if(Session::has('khach_hang_dn') != null && $count != 0)
                <a href="{{URL::to('Checklogin')}}">Thanh Toán<i class="fa fa-arrow-circle-right"></i></a>
                @endif
            </div>
        </div>
        
    </div>
    <!-- /Cart -->
</div>