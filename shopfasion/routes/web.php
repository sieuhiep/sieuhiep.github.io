<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('', function () {
//     return view('frontend/index');
// });

// backend 
Route::get('login','backend\LoginController@GetLogin')->middleware('CheckLogout');
Route::post('login','backend\LoginController@PostLogin');

Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('','backend\LoginController@GetIndex');
    Route::get('logout','backend\LoginController@LogOut');
    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('','backend\CategoryController@GetCategory');
        Route::post('','backend\CategoryController@PostCategory');
        Route::get('edit/{id}','backend\CategoryController@EditCategory');
        Route::post('edit/{id}','backend\CategoryController@PostEditCategory');
        Route::get('del/{id}','backend\CategoryController@DeleteCategory');
    });
    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('','backend\ProductController@ListProduct');
        Route::get('add','backend\ProductController@AddProduct');
        Route::post('add','backend\ProductController@PostProduct');
        Route::get('del-product/{id}','backend\ProductController@DelProduct');

        Route::get('edit/{id}','backend\ProductController@EditProduct');
        Route::post('edit/{id}','backend\ProductController@PostEditProduct');

        Route::post('add-attr','backend\ProductController@AddAttr');
        Route::get('detail-attr','backend\ProductController@DetailAttr');
        Route::get('edit-attr/{id}','backend\ProductController@EditAttr');
        Route::post('edit-attr/{id}','backend\ProductController@PostEditAttr');
        Route::get('del-attr/{id}','backend\ProductController@DeleteAttr');

        Route::post('add-value','backend\ProductController@AddValue');
        Route::get('edit-value/{id}','backend\ProductController@EditValue');
        Route::post('edit-value/{id}','backend\ProductController@PostEditValue');
        Route::get('delete-value/{id}','backend\ProductController@DeleteValue');

        Route::get('add-variant/{id}','backend\ProductController@AddVariant');
        Route::post('add-variant/{id}','backend\ProductController@PostAddVariant');
        Route::get('edit-variant/{id}','backend\ProductController@EditVariant');
        Route::post('edit-variant/{id}','backend\ProductController@PostEditVariant');
        Route::get('delete-variant/{id}','backend\ProductController@DelVariant');
    });

    // order
    Route::group(['prefix' => 'order'], function () {
        Route::get('','backend\OrderController@ListOrder');
        Route::get('detail/{id}','backend\OrderController@DetailOrder');
        Route::get('active/{id}','backend\OrderController@ActiveOrder');
        Route::get('processed','backend\OrderController@ProcessedOrder');
    });
});


//frontend
    Route::get('','frontend\HomeController@GetHome');
    Route::get('contact','frontend\HomeController@GetContact');
    Route::get('about','frontend\HomeController@Getabout');
    Route::group(['prefix' => 'product'], function () {
        Route::get('','frontend\ProductController@ListProduct');
        Route::get('detail/{id}','frontend\ProductController@DetailProduct');
        Route::get('addcart','frontend\ProductController@AddCart');
        Route::get('cart','frontend\ProductController@GetCart');
        Route::get('removecart/{id}','frontend\ProductController@RemoveCart');
        Route::get('updatecart/{rowId}/{qty}','frontend\ProductController@UpdateCart');
        Route::get('checkout','frontend\ProductController@CheckOut');
        Route::post('checkout','frontend\ProductController@PostCheckOut');
        Route::get('complete/{id}','frontend\ProductController@Complete');
    });
    
