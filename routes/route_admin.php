<?php
    //Dùng cho Typeproduct
    Route::get('admin/typeproduct/typeproduct-list','TypeproductController@list_type');
    Route::get('admin/typeproduct/typeproduct-add','TypeproductController@add_type');
    Route::post('admin/typeproduct/save_type','TypeproductController@save_type');

    Route::get('admin/typeproduct/typeproduct-edit/{Typeid}','TypeproductController@edit_type');
    Route::post('admin/typeproduct/update_type/{Typeid}','TypeproductController@update_type');
    Route::get('admin/typeproduct/typeproduct-delete/{Typeid}','TypeproductController@delete_type');
    // Dùng cho Product
    Route::get('admin/product/product-list','ProductController@list_product');
    Route::get('admin/product/product-add','ProductController@add_product');
    Route::post('admin/product/save_product','ProductController@save_product');

    Route::get('admin/product/product-edit/{Productid}','ProductController@edit_product');
    Route::post('admin/product/update_product/{Productid}','ProductController@update_product');
    Route::get('admin/product/product-delete/{Productid}','ProductController@delete_product');

    //Bật tắt sản phẩm, Bật tắt sản phẩm hot
    Route::get('admin/product/product-list/active/{Productid}','ProductController@active_product');
    Route::get('admin/product/product-list/unactive/{Productid}','ProductController@unactive_product');
    Route::get('admin/product/product-list/hot/{Productid}','ProductController@hot_product');
    Route::get('admin/product/product-list/unhot/{Productid}','ProductController@unhot_product');
    // Route management_order
    Route::get('admin/order/management_order','AdminCheckoutController@management_order');
    Route::get('admin/order/order_details/{orderid}','AdminCheckoutController@order_details');
    Route::get('admin/order/order-delete/{orderid}','AdminCheckoutController@delete_order');
    
    //Dùng cho loginAdmin
    Route::get('admin/login','LoginAdminController@getLogin_index');
    route::post('/login/getlogin_admin', 'LoginAdminController@getlogin_admin')->name('getlogin_admin');
    route::get('/logout', 'LoginAdminController@getlogout_admin');

    //Dùng cho Admin-User-Add
    
    Route::get('admin/user/user-list','UserAddController@UserList');

    route::get('admin/user/delete_customer/{id}','UserAddController@delete_customer');

    Route::get('admin/user/user-add','UserAddController@UserAdd');

    route::post('admin/user/user-add', 'loginController@getinfo_admin')->name('getregister_admin');

    route::get('admin/user/update/{Customername}','UserAddController@update');
    
    route::post('admin/user/updateProcess/{Customername}','UserAddController@updateProcess');

    //Dùng cho Admin-Feedback-Add
    Route::get('admin/feedback/feedback-list','UserfeedbackController@FeedbackList');
    route::get('admin/feedback/delete_feedback/{id}','UserfeedbackController@delete_Feedback');
    Route::get('admin/feedback/feedback-add','UserfeedbackController@FeedbackAdd');
    route::post('admin/feedback/feedback-add', 'FeedbackController@Feedback')->name('getfeedback');
    route::get('admin/feedback/update/{Customerid}','UserfeedbackController@update');
    route::post('admin/feedback/updateProcess/{Customerid}','UserfeedbackController@updateProcess');
    
    //Dùng cho loginAdmin
    Route::get('admin/login','LoginAdminController@getLogin_index');
    route::post('/login/getlogin_admin', 'LoginAdminController@getlogin_admin')->name('getlogin_admin');
    route::get('/logout', 'LoginAdminController@getlogout_admin');


