@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chỉnh Sửa Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @foreach($edit_product as $key => $ep)
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{URL::to('/admin/product/update_product/'.$ep->Productid)}}" method="post">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label>ID Sản Phẩm</label>
                                <input class="form-control" name="txtProductid"  value="{{ $ep -> Productid}}" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input class="form-control" name="txtProductname" placeholder="Please Enter Product Name" value="{{ $ep -> Productname}}" readonly/>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="txtProductprice" placeholder="Please Enter Price" value="{{ $ep -> Price }}" required/>
                                <div class="alert-danger" role="alert">
                                    <strong>{{ session('PPrice') ?? '' }}</strong>
                                </div> 
                            </div>
                            <div class="form-group">
                                <label>Loại Sản Phẩm</label>
                                <select class="form-control" name="txtTypeid">
                                    @foreach($type as $key => $type)
                                        <option value='{{$type->Typeid}}'>{{$type->Typeid}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="txtProductimages">
                            </div>
                            <div class="form-group">
                                <label>Mô Tả Sản Phẩm</label>
                                <input class="form-control" rows="3" name="txtProductdesciption" value="{{ $ep -> ProductDescription }}">
                            </div>
                            <button type="submit" class="btn btn-default">Cập Nhật Sản Phẩm</button>
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