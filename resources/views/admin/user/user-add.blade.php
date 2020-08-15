@extends('admin/layouts-admin/index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Người Dùng</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <div class="col-md-12 text-center">
                            @if(session('alert'))
                            <div class="alert alert-success" role="alert">
                                {{session('alert')}}<br>
                            </div>
                            @endif
                        </div>
                        <form method="post" action="{{route('getregister_admin')}}" id="form-register"  class="registerform">
                            @csrf
                            <input type="text" name="username" id="username" placeholder="Username" class="form-control" style="margin-bottom:1vw;"  reequired/>

                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" style="margin-bottom:1vw;"/>

                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" style="margin-bottom:1vw;" />

                            <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" style="margin-bottom:1vw;" />

                            <input type="text" name="address" id="address" placeholder="Address" class="form-control" style="margin-bottom:1vw;" /> 
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Xóa</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection