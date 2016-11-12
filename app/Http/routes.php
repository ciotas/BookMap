<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index');


});
