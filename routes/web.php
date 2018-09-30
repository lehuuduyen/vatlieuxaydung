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
	Route::get( 'reset_password/{token}',[
		'as' => 'password.reset',
		function ( $token ){
			// implement your reset password route here!
		}
	] );
	Route::get( '/',function (){
		return redirect( 'dashboard' );
	} );
	Route::get( '/dashboard','DashboardController@index' );
	Route::get( '/congtrinh_chitiet','DashboardController@congtrinh_chitiet' );
	Route::get( '/congtrinh','DashboardController@congtrinh' );
	Route::get( '/qlkho','DashboardController@qlkho' );
	Route::get( '/thuchi','DashboardController@thuchi' );
	Route::get( '/nhanvien','DashboardController@nhanvien' );
