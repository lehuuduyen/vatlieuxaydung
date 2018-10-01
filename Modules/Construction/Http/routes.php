<?php

//use Dingo\Api\Routing\Router;
//
//$api = app(Router::class);
//$api->version('v1', function (Router $api) {
//    $api->group([
//        'prefix' => 'contruction',
//        'namespace' => 'Modules\Contruction\Http\Controllers'
//    ], function (Router $api) {
//        $api->get( 'anyData','ConstructionController@anyData' );
//        $api->post( '','ConstructionController@store' );
//        $api->put( '{id}','ConstructionController@update' );
//        $api->get( 'show/{id}','ConstructionController@show' );
//        $api->get( 'tong','ConstructionController@tong' );
//
//
//    });
//
//
//
//});

Route::group(['middleware' => 'web', 'prefix' => 'contruction', 'namespace' => 'Modules\Construction\Http\Controllers'], function()
{
    Route::get('anyData', 'ConstructionController@anyData');
    Route::post('/', 'ConstructionController@store');
    Route::put('{id}', 'ConstructionController@update');
    Route::get('show/{id}', 'ConstructionController@show');
    Route::get('tong', 'ConstructionController@tong');
});
