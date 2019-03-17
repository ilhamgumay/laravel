<?php

/*
|--------------------------------------------------------------------------
| Web Routes



Route::get('/', function () {
    return view('welcome');
});



|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get($url,$callback);
Route::get('/hello',function(){
    return 'Hello World!';
});


Route::get('/welcome', function () {
echo "Welcome";
});

Route::get('/index', function () {
echo "Uji Coba route dengan method GET";
});
Route::get('/show/{id}', function ($id) {
echo "Nilai Parameter Adalah ".$id;
});


Route::get('/show/{id?}', function ($id=1) {
echo "Nilai Parameter Adalah ".$id;
});

Route::get('/edit/{nama}', function ($nama) {
echo "Nilai Parameter Adalah ".$nama;
})->where('nama','[A-Za-z]+');
