@extends('admin/layouts-admin/index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Phản Hồi</small>
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
                        <form method="post" action="{{route('getfeedback')}}" id="form-register"  class="registerform">
                            @csrf
                            <input class="input" type="text" name="title" id="title" placeholder="Your Title" style="margin-bottom:1vw;" > 
                            <input class="input" type="text" name="comment" id="comment" placeholder="Your Review" style="margin-bottom:1vw;" >

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