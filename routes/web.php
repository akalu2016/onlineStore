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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
/*
Route::get('/', function () {
    return view('about');
});
*/
Route::get('/', function () {
    return view('cart');
});
Route::get('/', function () {
    return view('products');
});
Route::get('/post','\App\Http\Controllers\PostController@index');
Route::get('/show/{id}','\App\Http\Controllers\PostController@show');

/*
Route::resources(
    [
    'post'=>'\App\Http\Controllers\PostController',
    'student'=>'\App\Http\Controllers\StudentController'
    ]
);
*/

Route::resource('student','\App\Http\Controllers\StudentController',
    [
    'only'=> ['create','show']
    ]
);
Route::resource('student','\App\Http\Controllers\StudentController',
    [
    'except'=> ['create','show']
    ]
);
Route::get('/text','\App\Http\Controllers\TestController@text');
Route::get('/tests/view','\App\Http\Controllers\TestController@view');
Route::get('/tests/jsonarray','\App\Http\Controllers\TestController@jsonarray');
Route::get('/tests/array','\App\Http\Controllers\TestController@array');

Route::get('/tests/pdf','\App\Http\Controllers\TestController@pdf');
Route::get('/tests/downloadpdf','\App\Http\Controllers\TestController@downloadpdf');
Route::get('/tests/image','\App\Http\Controllers\TestController@image');

Route::get('/pages/display/{view}','\App\Http\Controllers\PagesController@display');
Route::get('/pages/employees','\App\Http\Controllers\PagesController@employees');

/*Route::get('about','\App\Http\Controllers\HomeController@about')->name("home.about");*/

Route::get('index','\App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/pages/contact1','\App\Http\Controllers\PagesController@contact1');

Route::get('/pages/contact2/{display}','\App\Http\Controllers\PagesController@contact2');

Route::get('/pages/employee_list_for','\App\Http\Controllers\PagesController@employee_list_for');


Route::get('/home','\App\Http\Controllers\HomeController@index');
Route::get('/pages/employee_list_for','\App\Http\Controllers\PagesController@employee_list_for');

Route::get('/home/employees','\App\Http\Controllers\HomeController@employee_list');
Route::get('/home/newmenu','\App\Http\Controllers\HomeController@AddNewMenu');

Route::get('about','\App\Http\Controllers\HomeController@about')->name("home.about");

Route::get('/posts/insert','\App\Http\Controllers\PostController@insert');
Route::get('/posts/select','\App\Http\Controllers\PostController@select');
Route::get('/posts/update','\App\Http\Controllers\PostController@update');
