@extends('admin/layouts-admin/index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1> 
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update</br> Customer {{ ': ' . $rs -> Customername }}</h3>
                        </div> 
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                        <form role="form" action="{{ url("admin/user/updateProcess/{$rs -> Customername}")}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Customername</label>
                                    <input type="text" name="username" id="username" class="form-control" style="margin-bottom:1vw;" value="{{ $rs -> Customername }}" reaonly>
                                </div>
                                <div class="form-group">
                                    <label>Customerpass</label>
                                    <input type="password" name="password" id="password" class="form-control" style="margin-bottom:1vw;" value="{{ $rs -> customerpass }}">
                                </div> 
                                <div class="form-group">
                                    <label>Customeremail</label>
                                    <input type="email" name="email" id="email" class="form-control" style="margin-bottom:1vw;" value="{{ $rs -> Customeremail }}">
                                </div>
                                <div class="form-group">
                                    <label>Customerphone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" style="margin-bottom:1vw;" value="{{ $rs -> Customerphone }}">
                                </div> 
                                <div class="form-group">
                                    <label>Customeraddress</label>
                                    <input type="text" name="address" id="address" class="form-control" style="margin-bottom:1vw;" value="{{ $rs -> Customeraddress }}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection