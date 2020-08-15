@extends('layouts.app_master_frontend')
@section('content')
<div>
	<div class="col-md-12 text-center">
		@if(session('alert'))
		<div class="alert alert-danger" rote="alert">
			{{session('alert')}}<br>
		</div>
		@endif	
	</div>
    <form method="post" action="{{route('getlogin')}}" id="form-login" class="loginform">
        @csrf
        <h2>Đăng nhập</h2>
        <input type="text" name="username" id="user_input" placeholder="Tên người dùng" class="form-control"/>
        <input type="password" name="password" id="password" placeholder="Mật khẩu" class="form-control"/>
        
        <div class="checkbox mb-3">
            <label for="">
                <input type="checkbox" name="Th_Ghi_nho" value="remember-me">Ghi nhớ
            </label>
        </div>

        <label class="error"></label>
        
        <p> Bạn chưa có tài khoản hãy <a href="{{route('getregister')}}">Đăng ký</a></p>
        <button class="btn btn-lg btn-primary btn-block">Đăng nhập</btn>

    </form>
</div>
@stop