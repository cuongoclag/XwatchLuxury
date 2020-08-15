        @extends('admin/layouts-admin/index')
        @section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Loại Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID Loại Sản Phẩm</th>
                                <th>Tên Loại Sản Phẩm</th>
                                <th>Mô Tả</th>
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list_type as $key => $lt)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $lt->Typeid }}</td>
                                <td>{{ $lt->Typename }}</td>
                                <td>{{ $lt->Description }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a onclick="return confirm('Bạn có chắc chắn xóa không?')" href="{{URL::to('admin/typeproduct/typeproduct-delete/'.$lt->Typeid)}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                    <a  href="{{URL::to('admin/typeproduct/typeproduct-edit/'.$lt->Typeid)}}">Chỉnh Sửa</a></td>
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
    