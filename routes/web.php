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

Route::get('/','MainController@index')->name('main');
Route::get('/about','AboutController@index')->name('about');
Route::group(['prefix' => 'Cars', 'namespace' => 'Car'],function(){
  Route::get('add','AddController@view')->name('addCar');
  Route::get('{id}','ViewController@view')->name('ViewCar');
  Route::post('create','CreateController@create')->name('createCar');
  Route::get('getMyCars','GetController@getCars')->name('getMyCars');
  Route::put('editMyCar','EditController@create')->name('editMyCar');
  Route::get('getRequestsForMyCar','GetRequestsController@create')->name('getRequestsForMyCar');
  Route::get('about','AboutController@index')->name('getInformationAboutCar');
}
);









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
