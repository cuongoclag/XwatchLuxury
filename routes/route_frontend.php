<?php
    Route::group(['prefix' => 'index-frontend', 'namespace' => 'frontend'], function(){
    // Route::get('/', function(){
    //     return view('frontend.home.index_frontend');
    // });
    // Route trả về trang Home
    Route::group(['prefix' => '/Homes'], function(){
        Route::get('','HomeController@index') -> name('frontend.home.index_frontend');
    });
    // Route Đồng Hồ Nam
    Route::group(['prefix' => 'DongHoNam'], function(){
        Route::get('','DongHoNamController@index') -> name('frontend.DH_Nam.index_DHNam');
    });
    // Route Đồng Hồ Nữ
    Route::group(['prefix' => 'DongHoNu'], function(){
        Route::get('','DongHoNuController@index') -> name('frontend.DH_Nu.index_DHNu');
    });
    // Route SmartWatch
    Route::group(['prefix' => 'SmartWatch'], function(){
        Route::get('','SmartWatchController@index') -> name('frontend.SmartWatch.index_SmartWatch');
    });

    // Route Details Product
    Route::group(['prefix' => 'Details-Product'], function(){
        Route::get('','DetailsProductController@index') -> name('frontend.Chi_Tiet_San_Pham.Details_Product');
        Route::post('frontend/Chi_Tiet_San_Pham/feedback','DetailsProductController@Feedback') -> name('feedback');
    });
    // Route Search
    Route::group(['prefix' => 'DongHoNam'], function(){
        Route::post('','DongHoNamController@search') -> name('frontend.tim_kiem.search');
    });
    

    // Checkout

    // Route::get('/login_checkout','FrontendCheckoutController@login_checkout');

    //Danh muc san pham
    // Route::get('/danh-muc-san-pham/{Typeid}','TypeproductController@show_type');
    // //Chi tiet san pham
    // Route::get('/Details-Product/{Productid}','ProductController@details_product');
});