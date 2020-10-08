<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '/api/v1/cards'
], function () {
    Route::get('/getCards','CardsController@getCards');
    Route::post('/newCard','CardsController@newCard');
    Route::get('/defaultCard','CardsController@setDefaultCard');
    Route::delete('/deleteCard','CardsController@deleteCard');
});
