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

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show'); // Mostrar un producto
Route::get('/categories/{category}', 'CategoryController@show'); // Mostrar un producto
Route::post('/cart', 'CartDetailController@store'); // Al añadir un item, se activa el carrito
Route::delete('/cart', 'CartDetailController@destroy'); // Al eliminar un item, se deactiva en el carrito
Route::post('/order', 'CartController@update'); // Al añadir un item, se activa el carrito

// Aplicando middleware (capa de verificación intermedias para secciones sensibles)
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function() {
	Route::get('/products', 'ProductController@index'); // listado de productos
	Route::get('/products/create', 'ProductController@create'); // crear un producto
	Route::post('/products', 'ProductController@store'); // registrar producto
	Route::get('/products/{id}/edit', 'ProductController@edit'); // edición de producto
	Route::post('/products/{id}/edit', 'ProductController@update'); // actualizar producto
	Route::post('/products/{id}/delete', 'ProductController@destroy'); // elimina producto

	Route::get('/products/{id}/images', 'ImageController@index'); // Presentación de img de productos
	Route::post('/products/{id}/images', 'ImageController@store'); // registrar de img de productos
	Route::delete('/products/{id}/images', 'ImageController@destroy'); // Eliminar imagen del producto

	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar img de productos

	Route::get('/categories', 'CategoryController@index'); // listado de productos
	Route::get('/categories/create', 'CategoryController@create'); // crear un producto
	Route::post('/categories', 'CategoryController@store'); // registrar producto
	Route::get('/categories/{category}/edit', 'CategoryController@edit'); // edición de producto
	Route::post('/categories/{category}/edit', 'CategoryController@update'); // actualizar producto
	Route::delete('/categories/{category}/', 'CategoryController@destroy'); // elimina producto
});

//Route::post('/admin/products/{id}/delete', 'ProductController@destroy'); // Eliminar no recomendable

// create


// UD

