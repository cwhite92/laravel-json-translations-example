<?php

use App\Post;

Route::group(['middleware' => ['web']], function () {
    Route::resource('posts', 'PostController');

    Route::get('/locale/{locale}', ['as' => 'locale.update', 'uses' => 'LocaleController@setLocale']);
});
