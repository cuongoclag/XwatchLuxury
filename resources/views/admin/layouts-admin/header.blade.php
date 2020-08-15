<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Trang Quản Trị</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            @if(Session::has('admin_dn'))
                                <a class="cn" style="color:black; margin-top:0.3vw;" href="{{URL('admin/login')}}">
                                    <i class="fa fa-sign-out fa-fw"></i>
                                    {{Session::get('admin_dn')->Username}}
                                </a>
                                @else
                                    @if(! empty(Cookie::get('admin_dn')))
                                    <a tyle="margin-top:0vw;" href="{{URL('admin/login')}}">
                                    {{Cookie::get('admin_dn')->Username}}_cookie</a>
                                    @else
                                    <a href="{{route('getlogin')}}" class="cn c_white"><i class="fa fa-user cn c_white"></i>Đăng nhập</a>
                                    @endif
                            @endif
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            @include('admin/layouts-admin/menu')
            <!-- /.navbar-static-side -->
        </nav>