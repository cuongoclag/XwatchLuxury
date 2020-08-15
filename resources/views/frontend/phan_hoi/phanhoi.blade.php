@extends('layouts.app_master_frontend')
@section('content')
<div id="tab3" class="tab-pane fade in">
    <div class="row">
        <!-- Review Form -->
        <div class="col-md-12" style="text-align:center;">
            <div id="review-form" >
                <form class="review-form" method="post" action="{{route('feedback')}}">
                @csrf
                    <input class="hidden" type="text" name="Customerid" value="{{Session::get('khach_hang_dn')->Customerid}}">
                    <input class="input" type="text" name="title" id="title" placeholder="Tiều Đề Đánh Giá"> 
                    <input class="input" type="text" name="comment" id="comment" placeholder="Review của bạn">
                    <button class="primary-btn">Xác Nhận</button>
                </form>
            </div>
        </div>
        <!-- /Review Form -->
    </div>
</div>
<!-- /SECTION -->
@stop