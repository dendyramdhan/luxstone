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
Route::get('/', 'Frontend\MainController@home');
Route::get('home', 'Frontend\MainController@home')->name('home');
Route::get('kategori', 'Frontend\MainController@kategori')->name('kategori');
Route::get('product_detail/{param}', 'Frontend\MainController@product_detail')->name('produk_detail');
Route::get('kontak', 'Frontend\MainController@kontak')->name('kontak');
Route::get('blog', 'Frontend\MainController@blog')->name('blog');
Route::get('single_blog/{var}', 'Frontend\MainController@single_blog')->name('single_blog');
Route::get('tentang_kami', 'Frontend\MainController@tentang_kami')->name('tentang_kami');

/* area Backoffice */
Route::get('admin', 'Backoffice\HomeController@index');
Route::get('admin/login', 'Backoffice\HomeController@login');
Route::post('admin/login', 'Backoffice\HomeController@do_login');
Route::group(['middleware' => 'cek_login'], function () {
Route::post('admin/logout', 'Backoffice\HomeController@logout');

Route::get('admin/pengguna', 'Backoffice\PenggunaController@index');
Route::get('admin/pengguna/create', 'Backoffice\PenggunaController@create');
Route::get('admin/pengguna/{var}', 'Backoffice\PenggunaController@edit');
Route::post('admin/pengguna', 'Backoffice\PenggunaController@store');
Route::put('admin/pengguna/{var}', 'Backoffice\PenggunaController@update');
Route::delete('admin/pengguna/{var}', 'Backoffice\PenggunaController@destroy');

Route::get('admin/produk', 'Backoffice\ProductController@index');
Route::get('admin/produk/create', 'Backoffice\ProductController@create');
Route::post('admin/produk', 'Backoffice\ProductController@store');
Route::get('admin/produk/{var}', 'Backoffice\ProductController@edit');
Route::put('admin/produk/{var}', 'Backoffice\ProductController@update');
Route::delete('admin/produk/{var}', 'Backoffice\ProductController@destroy');

Route::get('admin/dblog', 'Backoffice\BlogController@index');
Route::get('admin/dblog/create', 'Backoffice\BlogController@create');
Route::get('admin/dblog/{var}', 'Backoffice\BlogController@edit'); 
Route::post('admin/dblog', 'Backoffice\BlogController@store');
Route::put('admin/dblog/{var}', 'Backoffice\BlogController@update');
Route::delete('admin/dblog/{var}', 'Backoffice\BlogController@destroy');

Route::get('admin/kontak', 'Backoffice\KontakController@index');
Route::get('admin/kontak/create', 'Backoffice\KontakController@create');
Route::get('admin/kontak/{var}', 'Backoffice\KontakController@edit');
Route::post('admin/kontak', 'Backoffice\KontakController@store');
Route::put('admin/kontak/{var}', 'Backoffice\KontakController@update');
Route::delete('admin/kontak/{var}', 'Backoffice\KontakController@destroy');

Route::get('admin/banner', 'Backoffice\BannerController@index');
Route::get('admin/banner/create', 'Backoffice\BannerController@create');
Route::post('admin/banner', 'Backoffice\BannerController@store');
Route::delete('admin/banner/{var}', 'Backoffice\BannerController@destroy');


Route::get('admin/kategori', 'Backoffice\Kat_prdController@index');
Route::get('admin/kategori/create', 'Backoffice\Kat_prdController@create');
Route::get('admin/kategori/{var}', 'Backoffice\Kat_prdController@edit');
Route::post('admin/kategori', 'Backoffice\Kat_prdController@store');
Route::put('admin/kategori/{var}', 'Backoffice\Kat_prdController@update');
Route::delete('admin/kategori/{var}', 'Backoffice\Kat_prdController@destroy');

Route::post('admin/logo', 'Backoffice\BannerController@logo');
Route::post('admin/iklan', 'Backoffice\BannerController@iklan');
Route::post('admin/paralax_1', 'Backoffice\BannerController@paralax_1');
Route::post('admin/paralax_2', 'Backoffice\BannerController@paralax_2');
Route::post('admin/main_banner', 'Backoffice\BannerController@main_banner');
Route::post('admin/banner', 'Backoffice\BannerController@banner');

});
