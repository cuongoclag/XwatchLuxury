@extends('layouts.app_master_admin')
@section('content')
<div>
	<div class="col-md-12 text-center">
		@if(session('alert'))
		<div class="alert alert-danger" rote="alert">
			{{session('alert')}}<br>
		</div>
		@endif	
	</div>
    <form method="post" action="{{route('getlogin_admin')}}" id="form-login" class="loginform">
        @csrf
        <h2>Đăng Nhập Hệ Thống</h2>
        <input type="text" name="username" id="user_input" placeholder="Username " class="form-control"/>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>

        <label class="error"></label>
        
        <button class="btn btn-lg btn-primary btn-block">Đăng nhập</btn>
    </form>
</div>
@stop