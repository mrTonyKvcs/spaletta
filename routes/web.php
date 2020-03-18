<?php
Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('no-reply@website_name.com', 'Website Name');
		$message->to('attila.kovacs92@gmail.com');
	});
});
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

//PAGES
Route::get('/', [
    'as'    => 'pages.index',
    'uses'  => 'PagesController@index' 
]);

Route::get('rolunk', [
    'as'    => 'pages.about',
    'uses'  => 'PagesController@about' 
]);

Route::get('etlap', [
    'as'    => 'pages.menu',
    'uses'  => 'PagesController@menu' 
]);

Route::get('itallap', [
    'as'    => 'pages.drinks',
    'uses'  => 'PagesController@drinks' 
]);

Route::get('galeria', [
    'as' => 'pages.gallery',
    'uses' => 'PagesController@gallery'
]);

Route::get('kapcsolat', [
    'as' => 'pages.contact',
    'uses' => 'PagesController@contact'
]);

//EVENTS
Route::get('rendezvenyek', [
    'as' => 'events.index',
    'uses' => 'EventsController@index'
]);

Route::get('rendezvenyek/{slug}', [
    'as' => 'events.show',
    'uses' => 'EventsController@show'
]);


//RESERVATIONS
Route::get('asztalfoglalas', [
    'as' => 'reservations.index',
    'uses' => 'ReservationsController@index'
]);

//SendMails
Route::post('uzenet-kuldes/{subject}', [
    'as'    => 'mail.store',
    'uses' => 'SendMailsController@store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
