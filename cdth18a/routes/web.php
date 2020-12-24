<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['prefix' => 'panel', 'namespace' => 'admin'], function() {	
	Route::get('login','LoginController@getLogin')->name('getLogin');
	Route::post('login','LoginController@postLogin')->name('postLogin');
	Route::get('logout','LoginController@getLogout')->name('getLogout');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel'], function() {
	Route::get('/', function() {return view('admin.home');})->name('welcome');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel/user', 'namespace' => 'admin'], function() {
	Route::get('/', 'adminUserController@index')->name('user.index');
	Route::get('index','UserController@index')->name('user.index');
	Route::get('add','UserController@getadd')->name('user.getadd');
	Route::post('add','UserController@postadd')->name('user.postadd');
	Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
	Route::get('delete/{id}','UserController@delete')->name('user.delete');
});

Route::group(['middleware' => 'CheckAdminLogin','prefix' => 'panel','namespace' => 'admin'], function() {
	Route::resource('product',ProductController::class);
	Route::resource('category',CategoryController::class);
	Route::get('category/productlist/{id}', 'CategoryController@productlist')->name('category.productlist');
	Route::resource('categoryNews',CategoryNews::class);
	Route::get('/unactive-category-product/{category_id}','Category@unactive_category_product');
	Route::get('/active-category-product/{category_id}','Category@active_category_product');
});

Route::group(['prefix' => 'product', 'namespace' => 'FrontEnd'], function() {
Route::get('/', 'ProductsController@index');
Route::get('cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('detailsproduct/{id}', 'ProductsController@detailsproduct');
Route::get('search','ProductsController@search');


Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');

});
// Route::group(['prefix' => 'product'], function() {
// 	Route::get('/', function() {return view('Pages.layout');})->name('welcome');
// });
/*
GET	    /product	        		index	product.index
GET	    /product/create	    		create	product.create
POST	/product					store	product.store
GET		/product/{product}			show	product.show
GET		/product/{product}/edit		edit	product.edit
PUT/PATCH	/product/{product}		update	product.update
DELETE	/ product/{product}			destroy	product.destroy
*/