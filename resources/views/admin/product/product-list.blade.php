@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Loại Sản Phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Status</th>
                                <th>Hot</th>
                                <th>Mô Tả Sản Phẩm</th>
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_product as $key => $lp)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $lp -> Productid}}</td>
                                <td>{{ $lp -> Productname}}</td>
                                <td>{{ $lp -> Price}}</td>
                                <td>{{ $lp -> Typeid}}</td>
                                <td><img src="frontend/dist/img/Nam/{{ $lp -> Image}}" height="100" width="100"></td>
                                <td>
                                    @if  ($lp -> Status == 1)
                                        <a href="{{URL::to('admin/product/product-list/unactive/'.$lp->Productid)}}" class="label label-info">Show</a>
                                    @else
                                        <a href="{{URL::to('admin/product/product-list/active/'.$lp->Productid)}}" class="label label-default">Hide</a>
                                    @endif
                                </td>
                                <td>
                                    @if  ($lp -> Hot == 1)
                                        <a href="{{URL::to('admin/product/product-list/unhot/'.$lp->Productid)}}" class="label label-info">Hot</a>
                                    @else
                                        <a href="{{URL::to('admin/product/product-list/hot/'.$lp->Productid)}}" class="label label-default">None</a>
                                    @endif
                                </td>
                                <td>{{ $lp -> ProductDescription}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('admin/product/product-delete/'.$lp->Productid)}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                    <a  href="{{URL::to('admin/product/product-edit/'.$lp->Productid)}}">Chỉnh Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection