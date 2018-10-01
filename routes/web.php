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
	
	$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
	switch ($page) {
		case 'books':
			Route::get('/library', 'LibraryController@getAllTableBook');
			break;
		case 'student':
			Route::get('/library', 'LibraryController@getAllTableStudent');
			break;
		case 'Oder':
			Route::get('/library', 'LibraryController@getAllTableOder');
			break;
		case 'category':
			Route::get('/library', 'LibraryController@getAllTableCategori');
			break;
		default:
			Route::get('/library', 'LibraryController@getAllTableBook');
			break;
	}