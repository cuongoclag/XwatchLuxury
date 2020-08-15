@extends('admin/layouts-admin/index')

@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chỉnh Sửa Loại Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @foreach($edit_type as $key => $et)
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{URL::to('/admin/typeproduct/update_type/'.$et->Typeid)}}" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label>ID Loại Sản Phẩm</label>
                                <input class="form-control" name="txtTypeid" placeholder="Please Enter Type ID" value="{{$et->Typeid}}" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm</label>
                                <input class="form-control" name="txtTypename" placeholder="Please Enter Type Name" value="{{$et->Typename}}" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <input class="form-control" rows="3" name="txtTypeDescription" value="{{$et->Description}}" >
                            </div>
                            <button type="submit" class="btn btn-default">Cập Nhật Loại Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>        
                    </div>
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection