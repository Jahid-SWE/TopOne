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


Route::get('/', [
    'uses'  =>  'App\Http\Controllers\EcommerceController@index',
    'as'    =>  'home',
]);

Route::get('/shop', [
    'uses'  =>  'App\Http\Controllers\EcommerceController@shop',
    'as'    =>  'shop',
]);

Route::get('/men', [
    'uses'  =>  'App\Http\Controllers\MenController@index',
    'as'    =>  'men',
]);
Route::get('/women', [
    'uses'  =>  'App\Http\Controllers\WomenController@index',
    'as'    =>  'women',
]);
Route::get('/kids', [
    'uses'  =>  'App\Http\Controllers\KidsController@index',
    'as'    =>  'kids',
]);



Route::get('/category-product/{id}', [
    'uses'  =>  'App\Http\Controllers\EcommerceController@categoryProduct',
    'as'    =>  'category-product',
]);


Route::get('/product-detail/{id}', [
    'uses'  =>  'App\Http\Controllers\EcommerceController@productDetail',
    'as'    =>  'product-detail',
]);

Route::post('/add-to-cart', [
    'uses'  =>  'App\Http\Controllers\CartController@index',
    'as'    =>  'add-to-cart',
]);

Route::get('/direct-add-to-cart/{id}', [
    'uses'  =>  'App\Http\Controllers\CartController@directAddToCart',
    'as'    =>  'direct-add-to-cart',
]);


Route::get('/show-cart', [
    'uses'  =>  'App\Http\Controllers\CartController@show',
    'as'    =>  'show-cart',
]);

Route::get('/remove-cart-product/{rowId}', [
    'uses'  =>  'App\Http\Controllers\CartController@remove',
    'as'    =>  'remove-cart-product',
]);

Route::post('/update-cart-product', [
    'uses'  =>  'App\Http\Controllers\CartController@update',
    'as'    =>  'update-cart-product',
]);

Route::get('/checkout', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@index',
    'as'    =>  'checkout',
]);

Route::get('/check-email-address', [
    'uses'          =>  'App\Http\Controllers\CheckoutController@checkEmailAddress',
    'as'            =>  'check-email-address',
]);

Route::post('/new-customer', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@newCustomer',
    'as'    =>  'new-customer',
]);

Route::get('/show-shipping', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@shipping',
    'as'    =>  'show-shipping',
]);

Route::post('/new-shipping', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@newShipping',
    'as'    =>  'new-shipping',
]);

Route::get('/show-payment', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@payment',
    'as'    =>  'show-payment',
]);

Route::post('/customer-logout', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@customerLogout',
    'as'    =>  'customer-logout',
]);


Route::post('/customer-login', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@customerLogin',
    'as'    =>  'customer-login',
]);

Route::post('/new-order', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@newOrder',
    'as'    =>  'new-order',
]);


Route::post('/confirm-online-payment', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@confirmOnlinePayment',
    'as'    =>  'confirm-online-payment',
]);

Route::get('/complete-order', [
    'uses'  =>  'App\Http\Controllers\CheckoutController@completeOrder',
    'as'    =>  'complete-order',
]);
Route::post('/subscribe', [
    'uses'  =>  'App\Http\Controllers\SubscriberController@subscribers',
    'as'    =>  'subscribe',
]);


Route::get('/dashboard', [
    'uses'          =>  'App\Http\Controllers\DashboardController@index',
    'as'            =>  'dashboard',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/add-category', [
    'uses'          =>  'App\Http\Controllers\CategoryController@index',
    'as'            =>  'add-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::post('/new-category', [
    'uses'          =>  'App\Http\Controllers\CategoryController@create',
    'as'            =>  'new-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/manage-category', [
    'uses'          =>  'App\Http\Controllers\CategoryController@manage',
    'as'            =>  'manage-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-category/{id}', [
    'uses'          =>  'App\Http\Controllers\CategoryController@edit',
    'as'            =>  'edit-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-category', [
    'uses'          =>  'App\Http\Controllers\CategoryController@update',
    'as'            =>  'update-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/delete-category/{id}', [
    'uses'          =>  'App\Http\Controllers\CategoryController@delete',
    'as'            =>  'delete-category',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/add-brand', [
    'uses'          =>  'App\Http\Controllers\BrandController@index',
    'as'            =>  'add-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-brand', [
    'uses'          =>  'App\Http\Controllers\BrandController@create',
    'as'            =>  'new-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/manage-brand', [
    'uses'          =>  'App\Http\Controllers\BrandController@manage',
    'as'            =>  'manage-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/view-subscribers', [
    'uses'          =>  'App\Http\Controllers\SubscriberController@viewSubscribers',
    'as'            =>  'view-subscribers',
    'middleware'    => ['auth:sanctum', 'verified']
]);



Route::get('/edit-brand/{id}', [
    'uses'          =>  'App\Http\Controllers\BrandController@edit',
    'as'            =>  'edit-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-brand', [
    'uses'          =>  'App\Http\Controllers\BrandController@update',
    'as'            =>  'update-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/delete-brand/{id}', [
    'uses'          =>  'App\Http\Controllers\BrandController@delete',
    'as'            =>  'delete-brand',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/delete-subscriber/{id}', [
    'uses'          =>  'App\Http\Controllers\SubscriberController@delete',
    'as'            =>  'delete-subscriber',
    'middleware'    => ['auth:sanctum', 'verified']
]);




Route::get('/add-product', [
    'uses'          =>  'App\Http\Controllers\ProductController@index',
    'as'            =>  'add-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/new-product', [
    'uses'          =>  'App\Http\Controllers\ProductController@create',
    'as'            =>  'new-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/manage-product', [
    'uses'          =>  'App\Http\Controllers\ProductController@manage',
    'as'            =>  'manage-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/view-product-detail/{id}', [
    'uses'          =>  'App\Http\Controllers\ProductController@detail',
    'as'            =>  'view-product-detail',
    'middleware'    => ['auth:sanctum', 'verified']
]);


Route::get('/edit-product/{id}', [
    'uses'          =>  'App\Http\Controllers\ProductController@edit',
    'as'            =>  'edit-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-product', [
    'uses'          =>  'App\Http\Controllers\ProductController@update',
    'as'            =>  'update-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/delete-product/{id}', [
    'uses'          =>  'App\Http\Controllers\ProductController@delete',
    'as'            =>  'delete-product',
    'middleware'    => ['auth:sanctum', 'verified']
]);



/* Order route start*/

Route::get('/manage-order', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@index',
    'as'            =>  'manage-order',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/view-order-detail/{id}', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@viewOrderDetail',
    'as'            =>  'view-order-detail',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/view-order-invoice/{id}', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@viewOrderInvoice',
    'as'            =>  'view-order-invoice',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/download-order-invoice/{id}', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@downloadOrderInvoice',
    'as'            =>  'download-order-invoice',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/edit-order/{id}', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@editOrder',
    'as'            =>  'edit-order',
    'middleware'    => ['auth:sanctum', 'verified']
]);
Route::get('/delete-order/{id}', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@deleteOrder',
    'as'            =>  'delete-order',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::post('/update-order', [
    'uses'          =>  'App\Http\Controllers\AdminOrderController@updateOrder',
    'as'            =>  'update-order',
    'middleware'    => ['auth:sanctum', 'verified']
]);

Route::get('/add-user', [
    'uses'          =>  'App\Http\Controllers\UserController@index',
    'as'            =>  'add-user',
    'middleware'    => ['auth:sanctum', 'verified', 'mortuza']
]);

Route::post('/new-user', [
    'uses'          =>  'App\Http\Controllers\UserController@create',
    'as'            =>  'new-user',
    'middleware'    => ['auth:sanctum', 'verified', 'mortuza']
]);

Route::get('/manage-user', [
    'uses'          =>  'App\Http\Controllers\UserController@manage',
    'as'            =>  'manage-user',
    'middleware'    => ['auth:sanctum', 'verified', 'mortuza']
]);

//Ssl commerz related stuff


Route::post('/pay', [\App\Http\Controllers\CheckoutController::class, 'pay'])->name('pay');

Route::post('/success', [\App\Http\Controllers\CheckoutController::class, 'success']);
Route::post('/fail', [\App\Http\Controllers\CheckoutController::class, 'fail']);
Route::post('/cancel', [\App\Http\Controllers\CheckoutController::class, 'cancel']);

Route::post('/ipn', [\App\Http\Controllers\CheckoutController::class, 'ipn']);



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
