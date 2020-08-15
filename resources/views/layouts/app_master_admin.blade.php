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
    
    <!-- ĐÂy là phần thân -->
	@yield('content')
    <!-- Kết Thúc phần thân -->
    <!-- jQuery Plugins -->
    <script src="{{asset('frontend/dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/bootstrap.min.js')}}"></script>\
    <script src="{{asset('frontend/dist/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('frontend/dist/js/main.js')}}"></script>
</body>
</html>