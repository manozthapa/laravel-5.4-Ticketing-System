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
/*Auth::routes();

Route::get('/','TicketController@index');

Route::group(['middleware' =>'auth'],function(){
	Route::get('xyz','HomeController@xyz');
});*/

//Route::get('/','TicketController@index');

Route::get('/','TicketController@ticketList');

Route::group(['middleware'=>'auth'],function(){
	Route::get('ticketNew','TicketController@ticketNew');
	Route::post('save','TicketController@saveTicket');
	Route::resource('answers','AnswerController');
	/*Route::group(['middleware' => 'role'],function(){
	Route::get('categories','CategoryController@index');
	Route::get('categories/create','CategoryController@create');
	Route::post('categories/save','CategoryController@store');
	Route::get('categories/edit/{id}','CategoryController@edit');
	Route::post('categories/update','CategoryController@update');
	Route::get('categories/destroy/{id}','CategoryController@destroy'); });*/
});

Route::group(['middleware'=>'admin','prefix'=>'admin'],function(){
	Route::get('/','AdminController@index');
	/*Route::get('categories','CategoryController@index');
	Route::get('categories/create','CategoryController@create');
	Route::post('categories/save','CategoryController@store');
	Route::get('categories/edit/{id}','CategoryController@edit');
	Route::get('categories/show/{id}','CategoryController@show');
	Route::post('categories/update','CategoryController@update');
	Route::post('categories/destroy/{id}','CategoryController@destroy');*/

	Route::resource('categories','CategoryController1'); 
});
Route::group(['namespace'=>'Utilities'],function(){
	Route::get('utility','UtilityController@index');
});
Route::get('utility','UtilityController@index');

Route::get('accessdenied',function(){
	return view('accessdenied');
});

Route::get('view/{id}','TicketController@viewTicket');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::post('search','TicketController@search');