<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Loại Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('admin/typeproduct/typeproduct-list')}}">Danh Sách Loại Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin/typeproduct/typeproduct-add')}}">Thêm Loại Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('admin/product/product-list')}}">Danh Sách Sản Phẩm</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin/product/product-add')}}">Thêm Sản Phẩm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i>Đơn Đặt Hàng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ URL::to('admin/order/management_order') }}">Quản Lý Đơn Đặt Hàng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('admin/user/user-list')}}">Danh Sách Người Dùng</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin/user/user-add')}}">Thêm Người Dùng</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Phản Hồi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('admin/feedback/feedback-list')}}">Danh Sách Phản Hồi</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin/feedback/feedback-add')}}">Thêm Phản Hồi</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>