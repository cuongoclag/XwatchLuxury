@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách 
                            <small>Phản Hồi</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã Phản Hồi</th>
                                <th>Tiêu Đề</th>
                                <th>Nôi Dung</th>
                                <th>Xóa</th>
                                <th>Chỉnh Sửa</th>
                            </tr>
                        </thead> 
                        <tbody> 
                            @foreach($feedback as $it)
                            <tr>
                                <td>{{$it -> Customerid}}</td>
                                <td>{{$it -> Title}}</td>
                                <td>{{$it -> Comment}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                    <a href="{{url("admin/feedback/delete_feedback/{$it -> Customerid}")}}"> Xóa</a>
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                    <a  href="{{url("admin/feedback/update/{$it -> Customerid}")}}">Chỉnh Sửa</a>
                                </td>
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