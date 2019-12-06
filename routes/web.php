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

//INDEX
Route::get('/', 'KK_C@home')->middleware('guest')->name('home');
Route::get('/home', 'KK_C@home')->middleware('guest')->name('home');
Route::get('/landingpage', 'KK_C@home')->middleware('guest');
Route::get('/gallery', function () {
    return view('gallery');
});

//LOGIN & REGISTRASI & LOGOUT
Auth::routes();
Route::post('/login', 'AccountController@login')->middleware('guest')->name('login');
Route::get('/regis', 'AccountController@getRegister')->middleware('guest');
Route::post('/regis', 'AccountController@Register')->name('register');
Route::get('/logout', 'AccountController@logout')->middleware('auth');

//BOOKING
Route::get('/booking', 'KK_C@gotobooking');
Route::post('/loaddata', 'KK_C@loadbooking');
Route::get('/konfirm/invoice/{booking}', 'KK_C@cetakInvoice');

Route::get('/pageuser/admin', 'KK_C@admin')->middleware('auth');

//USER
Route::get('/pageuser/profile', 'KK_C@user')->middleware('auth');


//VALIDASI PEMBAYARAN AWAL

//LIHAT GALERI

//ADMIN
Route::get('/pageadmin/dashboard', 'AdminController@admin')->middleware('auth');
Route::get('/pageadmin/manageaccount', 'AdminController@index');
Route::get('/pageadmin/manageaccount/edit/{nik}', 'AdminController@edit');
Route::post('/prosesEditUser', 'AdminController@update');
Route::get('/pageadmin/manageaccount/pindah/{nik}', 'AdminController@pindahKamar');
Route::post('/prosesPindahUser', 'AdminController@pindah2');
Route::get('/pageadmin/manageaccount/delete/{nik}', 'AdminController@destroy');


Route::get('/pageadmin/VBooking', 'AdminController@vbooking');
Route::get('/pageadmin/VPembayaran', 'AdminController@vpembayaran');
Route::get('/pageadmin/profile', function () {
    return view('pageadmin/profile');
});
Route::get('/validasiBayar/{nik}', 'AdminController@updateStatusPembayaran');



// validasi booking
Route::post('/insertbooking', 'AdminController@insertBooking');
Route::get('/kwitansibooking/{r}/{foto}/{nama}/{kamar}/{nik}', 'AdminController@kwitansiBooking');

// USER
Route::get('/pageuser/profile', 'KK_C@user')->middleware('auth');
// Route::get('/pageuser/profile', 'KK_C@main')->middleware('auth');

Route::get('/gotoupdate', 'KK_C@showDataUserUpd');

Route::post('/updateDataDiri/{nik}', 'KK_C@updateDataDiri');

Route::get('/pageuser/changepassword', 'KK_C@inputPassword');
Route::post('/changepassword/{nik}', 'KK_C@updatePassword');

Route::get('/pageuser/kwitansi', function () {
    return view('/pageuser/kwitansi');
});

Route::get('/pageuser/buktipembayaran', function () {
    $user = DB::table('tb_user')->get();

    return view('pageuser/buktipembayaran', compact('user'));
});

Route::get('/pageuser/status', function () {
    $user = DB::table('tb_user')->get();

    return view('pageuser/status', compact('user'));
});

//bayar kos dr user
Route::post('/bayarUser/{nik}', 'KK_C@bayarKos');
Route::get('/cobatr', function () {
    $user = DB::table('tb_user')->get();

    return view('coba', compact('user'));
});
