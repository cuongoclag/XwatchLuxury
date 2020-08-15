@extends('admin/layouts-admin/index')
        @section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Loại Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{URL::to('/admin/typeproduct/save_type')}}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>ID Loại Sản Phẩm</label>
                                <input class="form-control" name="txtTypeid" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('idMessage') ?? '' }}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm</label>
                                <input class="form-control" name="txtTypename" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('nameMessage') ?? '' }}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea class="form-control" rows="3" name="txtTypeDescription"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Loại Sản Phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection