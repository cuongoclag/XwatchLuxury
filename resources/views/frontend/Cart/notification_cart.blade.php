@extends('layouts.app_master_frontend')
@section('content')
    <?php
        Cart::destroy();
    ?>
    <div class="invoice-box" align="center">
    <h3>Đặt Hàng thành công!</h3>
    <p>Xin chân thành cản ơn quý khách đã đặt hàng, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>
    </div>
@stop