@extends('layouts.app_master_frontend')
@section('content')
<?php
?>
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="breadcrumb-header">Bạn Chưa Có Đơn Hàng Nào!</h4>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->
<div class="invoice-box" align="center">
<a href="{{ route('frontend.home.index_frontend') }}" class="btn btn-primary"><i class="fa fa-backward"></i> Tiếp Tục Mua Hàng</a>
</div>
@stop