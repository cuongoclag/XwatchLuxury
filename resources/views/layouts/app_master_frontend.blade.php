<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>XwatchLuxury</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="{{ asset('frontend/dist/css/slick.css') }}">
    <!-- hang.css -->
    <link rel="stylesheet" href="{{asset('frontend/dist/css/hang.css')}}"/>
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('frontend/dist/css/slick-theme.css')}}"/>
    <!-- nouislider -->
    <link rel="stylesheet" href="{{asset('frontend/dist/css/nouislider.min.css')}}"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{  asset('frontend/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/dist/css/style.css')}}"/>
    <!-- invoice css -->
    <link rel="stylesheet" href="{{asset('frontend/dist/css/invoice.css')}}"/>
</head>
<body>
	<!-- HEADER -->
	<header>
	<!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                    <li>
                        @if(Session::has('khach_hang_dn'))
                            <a class="cn" style="color:white; margin-top:0.3vw;" href="{{URL('login/logout')}}">
                                <i class="fas fa-sign-out-alt"></i>
                                {{Session::get('khach_hang_dn')->Customername}}
                            </a>
                            @else
                                @if(! empty(Cookie::get('khach_hang_dn')))
                                <a tyle="margin-top:0vw;" href="{{URL('login/logout')}}">
                                {{Cookie::get('khach_hang_dn')->Customername}}_cookie</a>
                                @else
                                <a href="{{route('getlogin')}}" class="cn c_white"><i class="fa fa-user cn c_white"></i>Đăng nhập</a>
                                @endif
                        @endif
                    </li>
                    @if(Session::has('khach_hang_dn') == null)
                    <li><a href="{{route('getregister')}}"><i class="fa fa-user-o"></i>Đăng kí</a></li>
                    @endif
                    @if(Session::has('khach_hang_dn'))
                    <li><a href="{{URL::to('show_order/'.$Ctmid = Session::get('khach_hang_dn')->Customerid)}}"><i class="fa fa-user-o"></i>Xem Đơn Hàng</a></li>
                    <li><a href="{{URL::to('show_info/'.$Ctmid = Session::get('khach_hang_dn')->Customerid)}}"></i>Xem Thông Tin</a></li>
                    <li><a href="{{URL::to('show_fb/'.$Ctmid = Session::get('khach_hang_dn')->Customerid)}}"></i>Phản hồi</a></li>
                    @endif
                </ul>
            </div>
        </div>
		<!-- /TOP HEADER -->
		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{ route('frontend.home.index_frontend') }}" class="logo">
                                <img src="{{ asset('frontend/dist/img/logoxwatch.png')}}" alt="">
                            </a>
                        </div>
                    </div>
					<!-- /LOGO -->
					<!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form role="search" method="post" action="{{route('frontend.tim_kiem.search')}}">
                                {{csrf_field()}}
                                <select class="input-select">
                                    <option value="0">XwatchLuxury</option>
                                </select>
                                <input class="input" name="key" placeholder="Tìm kiếm tại đây">
                                <button class="search-btn">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
					<!-- /SEARCH BAR -->
                    <div class="col-md-3 clearfix">  
                        <div class="header-ctn">
                            <div>
                            @include('frontend/Cart/cart')
                            </div>
                        <!-- Menu Toogle -->
						    <div class="menu-toggle">
							<a href="#">
								<i class="fa fa-bars"></i>
								<span>Menu</span>
						    </a>
						    </div>
                        </div>
						<!-- /Menu Toogle -->
                    </div>
				</div>
				<!--/row -->
			</div>
			<!--/container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="{{ route('frontend.home.index_frontend') }}">Trang Chủ</a></li>
                    <!-- class="active" -->
                    <li><a href="{{ route('frontend.DH_Nam.index_DHNam') }}">Sản Phẩm</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
    
    <!-- ĐÂy là phần thân -->
	@yield('content')
    <!-- Kết Thúc phần thân -->


    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Kết Nối Với Chúng Tôi</p>
                        
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#" title="Facebook"><i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
    <!-- FOOTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Về Chúng Tôi</h3>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Thông Tin</h3>
                            <ul class="footer-links">
                                <li><a href="#">Về Chúng Tôi</a></li>
                                <li><a href="#">Liên hệ Chúng Tôi</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-6 col-xs-12">
                        <div class="footer">
                            <h3 class="footer-title">Bản Đồ</h3>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2330.439959591541!2d106.66578900096883!3d10.786998538651366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech+Computer+Education+HCM!5e0!3m2!1svi!2s!4v1566360766173!5m2!1svi!2s" width="100%" height="250" frameborder="0" style="border:1" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul> -->
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> XwatchLuxury - Đồng Hồ Thụy Sĩ <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Xwatch</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                    <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{asset('frontend/dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>\
    <script src="{{asset('frontend/dist/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/main.js')}}"></script>
</body>
</html>