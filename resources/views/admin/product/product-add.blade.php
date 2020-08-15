@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{URL::to('/admin/product/save_product')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label>ID Sản Phẩm</label>
                                <input class="form-control" name="txtProductid" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('PidMessage') ?? '' }}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="txtProductname" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('PnameMessage') ?? '' }}</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>ID Loại Sản Phẩm</label>
                                <select class="form-control" name="txtTypeid">
                                    @foreach($type as $key => $type)
                                        <option value='{{$type->Typeid}}'>{{$type->Typeid}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtProductprice" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('PPrice') ?? '' }}</strong>
                                </div>    
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="txtProductimages" required>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả Sản Phẩm</label>
                                <textarea class="form-control" rows="3" name="txtProductdesciption"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm Sản Phẩm</button>
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