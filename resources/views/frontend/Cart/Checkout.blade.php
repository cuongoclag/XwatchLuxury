@extends('layouts.app_master_frontend')
@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumb-header">Thanh Toán</h4>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<div class="section">
    <?php 
        $content = Cart::content();
    ?>
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-7">
                <!-- Customer info -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Thông Tin Khách Hàng</h3>
                    </div>
                    <div class="form-group">
                        <label>Tên Khách Hàng</label>
                        <input class="input" type="text" readonly value="{{$customer_info -> Customername}}">
                    </div>
                    <div class="form-group">
                        <label>Email Khách Hàng</label>
                        <input class="input" type="email" readonly value="{{$customer_info -> Customeremail}}">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ Khách Hàng</label>
                        <input class="input" type="text" readonly value="{{$customer_info -> Customeraddress}}">
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại</label>
                        <input class="input" type="tel" readonly value="{{$customer_info -> Customerphone}}">
                    </div>
                </div>
                <!-- /Customer info -->
                <!-- Shiping Details -->
                <div class="shiping-details">
                    <div class="section-title">
                        <h3 class="title">Địa Chỉ Giao Hàng</h3>
                    </div>
                    <form action="{{ URL::to('/save_Delivery_address') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Người Nhận</label>
                            <input class="input" type="text" name="Recipient_Name" placeholder="Tên" title="Nhập tên người Nhận." pattern="[a-zA-Z]+" required>
                        </div>
                        <div class="form-group">
                            <label>Email Người Nhận</label>
                            <input class="input" type="email" name="Recipient_Email" placeholder="Email" title="Nhập Email người nhận." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ Người Nhận</label>
                            <input class="input" type="text" name="Recipient_Address" placeholder="Địa Chỉ" title="Nhập Địa chỉ người nhận." pattern="[A-Za-z0-9'\.\-\s\,]" required>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại Người Nhận</label>
                            <input class="input" type="text" name="Recipient_Phone" placeholder="Số Điện Thoại" title="Nhập Số ĐT người nhận (gồm 10 hoặc 11 chữ số)" pattern="[0-9]{10,11}" required>
                        </div>
                        <div class="order-notes">
                            <label>Ghi Chú</label>
                            <textarea class="input" name="cart_note" placeholder="Ghi Chú" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="hidden" type="text" name="Customerid" value="{{Session::get('khach_hang_dn')->Customerid}}"> 
                        </div>
                        <div class="form-group">
                            <input class="hidden" type="number" name="total" value="{{ Cart::priceTotal() }}">
                        </div>
                        <!-- <div class="payment-options">
                            <span>
                                <label><input name="payment_option" value = "1" type = "checkbox"> Trả bằng thẻ.</label>
                            </span>
                            <br>
                            <span>
                                <label><input name="payment_option" value = "2" type = "checkbox"> Trả bằng tiền mặt.</label>
                            </span>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-sm">Xác Nhận</button>
                    </form>
                </div>
                <!-- /Shiping Details -->
            </div>
            <!-- Order Details -->
            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Đơn Hàng Của Bạn</h3>
                </div>
                <div class="order-summary">
                    <div class="order-col">
                        <div><strong>Sản Phẩm</strong></div>
                        <div><strong>Tổng</strong></div>
                    </div>
                    @foreach($content as $v_content)
                    <div class="order-products">
                        <div class="order-col">
                            <div>{{ $v_content->qty }} x {{ $v_content->name }}</div>
                            <div>
                                <?php 
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format( $subtotal).' '.'$';
                                ?>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="order-col">
                        <div>Giao Hàng</div>
                        <div><strong>FREE</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>Tổng Đơn Hàng</strong></div>
                        <div><strong class="order-total">{{ Cart::priceTotal() }} $</strong></div>
                    </div>
                </div>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

@stop