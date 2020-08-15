<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('/')->group(function () {
    route::get('/', 'TrangChuController@index');
});

Route::prefix('dong-ho-nam/')->group(function () {
    route::get('', 'DongHoNamController@index');
});
Route::prefix('login/')->group(function () {
    route::get('/logout', 'loginController@getlogout');
    route::get('/login/getlogin', 'loginController@getLogin_1')->name('getlogin');
    route::post('/login/getlogin', 'loginController@getlogin_2')->name('getlogin');
    route::get('/register/getregister', 'loginController@getRegister')->name('getregister');
    route::post('/register/getregister', 'loginController@getinfo')->name('getregister');
});
Route::prefix('lien-he/')->group(function () {
    route::get('', 'LienHeController@index');
});
//Danh muc san pham
Route::get('/danh-muc-san-pham/{Typeid}','TypeproductController@show_type');
//Chi tiet san pham
Route::get('/Details-Product/{Productid}','ProductController@details_product');

//Cart
Route::post('/save_cart_index','CartController@save_cart_index');
Route::post('/save_cart_details','CartController@save_cart_details');
// show-cart
Route::get('show_cart','CartController@show_cart');

// Show list order - customer
Route::get('show_order/{Ctmid}','CartController@show_order');

// Details order - customer
Route::get('details_order/{Orderid}','CartController@details_order');

// Edit order - customer
Route::get('edit_order_address/{orderid}','CartController@edit_order_address');

Route::get('edit_product_order/{productid}','CartController@edit_product_order');

// Update order - customer
Route::post('update_order_address/{orderid}','CartController@update_order_address');

// Delete order - customer
Route::get('delete_order/{Orderid}','CartController@delete_order');
Route::get('delete_product_order/{orderdetailsid}','CartController@delete_product_order');
// update quantity
Route::post('/update_cart_qty','CartController@update_cart_qty');
// delete cart-customer
Route::get('delete_to_cart/{rowId}','CartController@delete_to_cart');

// delete cart
Route::get('delete_to_cart/{rowId}','CartController@delete_to_cart');
Route::get('delete_to_cart_index/{rowId}','CartController@delete_to_cart_index');
// Checkout Cart
Route::get('Checklogin','loginController@Checklogin');
Route::get('Checkout_Cart','CartController@Checkout_Cart');
// 
Route::post('/save_Delivery_address','CartController@save_Delivery_address');
Route::get('Invoice_Cart','CartController@Invoice_Cart');

// save order
Route::post('save_order','CartController@save_order');
// Route::get('show_invoice/{Orderid}','CartController@show_invoice');

// Route show info khách hàng
Route::get('show_info/{Customerid}','loginController@show_info');

Route::get('frontend/thong_tin/thongtin','UserAddController@capnhat_thongthin');

Route::get('frontend/thong_tin/update/{Customerid}','UserAddController@update');

Route::post('frontend/thong_tin/updateProcess/{Customerid}','UserAddController@updateProcess');

Route::get('show_fb/{Customerid}','loginController@show_fb');
Route::get('frontend/phan_hoi/phanhoi','UserAddController@capnhat_thongthin');

Route::get('frontend.phan_hoi.phanhoi','DetailsProductController@phanhoi');
Route::post('frontend.phan_hoi.phanhoi.feedback','DetailsProductController@Feedback') -> name('feedback');

include 'route_admin.php';
include 'route_frontend.php';