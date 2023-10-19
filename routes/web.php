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
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/qoute', [App\Http\Controllers\WebController::class, 'qoute']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/quotaion_view', 'HomeController@quotaion_view');
Route::get('/view_vehicle_type', 'HomeController@view_vehicle_type');
Route::any('/submit_vehical_type', 'HomeController@submit_vehical_type');
Route::get('/view_material_weight', 'HomeController@view_material_weight');
Route::any('/submit_material_weight', 'HomeController@submit_material_weight');
Route::any('/delete_type/{id}/{type}', 'HomeController@delete_type');

