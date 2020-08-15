@extends('layouts.app_master_frontend')
@section('content')
<div>
	<div class="col-md-12 text-center">
		@if(session('alert'))
		<div class="alert alert-success" role="alert">
			{{session('alert')}}<br>
		</div>
		@endif
	</div>
	<<form method="post" action="{{route('getregister')}}" id="form-register"  class="registerform">
		@csrf
		<h2>Đăng ký</h2>
		<input type="text" name="username" id="username" placeholder="Tên người dùng" class="form-control"/>
		<input type="password" name="password" id="password" placeholder="Mật khẩu" class="form-control"/>
		<input type="password" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu" class="form-control"/>
		<input type="email" name="email" id="email" placeholder="Email" class="form-control" />
		<input type="text" name="phone" id="phone" placeholder="Số điện thoại" class="form-control"/>
		<input type="text" name="address" id="address" placeholder="Địa chỉ" class="form-control" />
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<button class="btn btn-lg btn-primary" type="submit">Đăng kí</btn>
	</form>
	<script type="text/javascript">
	/**$("#form-register").validate({
		rules:{
			username:{
				required:true,
				minlength:3,
			},
			password:{
				required:true,
				minlength:6,
			},
			email:{
				required:true,
				email:true,
			},
			phone:{
				required:true,
				minlength:10,
			},
			address:{
				required:true,
				minlength:6,
			},		 
		},
		messages:{
			username:{
				required:"Vui lòng username",
				minlength:"Phải nhập 3 kí tự trở lên",
				remote:"Username đã tồn tại"
			},
			password:{
				required:"Vui lòng nhập mật khẩu",
				minlength:"Mật khẩu phải 6 kí tự trở lên",
			},
			email:{
				required:"Vui lòng nhập email",
				email:"Không dúng định dạng email",
				remote:"Email này đã tồn tại"
			},
			phone:{
				required:"Vui lòng nhập phone",
				minlength:"Mật khẩu phải 10 số",
			},
			address:{
				required:"Vui lòng nhập địa chỉ",
				minlength:"Mật khẩu phải 6 kí tự trở lên",
			}
		}
	})**/
</script>
</div>

@stop