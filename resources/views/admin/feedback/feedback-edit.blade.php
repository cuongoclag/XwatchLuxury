@extends('admin/layouts-admin/index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Feedback
                            <small>Edit</small>
                        </h1> 
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update</br> Feedback {{ ': ' . $rs -> Title }}</h3>
                        </div> 
                        <!-- /.card-header -->
                        <!-- form start -->
                        <!--Chèn đoạn mã <form></form> vào đây-->
                        <form role="form" action="{{ url("admin/feedback/updateProcess/{$rs -> Title}")}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                            <div class="card-body">
                            <div class="form-group">
                                    <label>Titleid</label>
                                    <input class="input" type="text" name="customerid" id="customerid" style="margin-bottom:1vw;" value="{{ $rs -> Customerid }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="input" type="text" name="title" id="title" style="margin-bottom:1vw;" value="{{ $rs -> Title }}" >
                                </div>
                                <div class="form-group">
                                    <label>Comment</label>
                                    <input class="input" type="text" name="comment" id="comment" style="margin-bottom:1vw;" value="{{ $rs -> Comment }}">
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