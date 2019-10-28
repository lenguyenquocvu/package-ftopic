<?php

Route::group(['middleware' => ['web']], function ()
{
    Route::get('/student/submit-up',['uses' => 'Fteam\Topic\Controllers\TopicController@index'] )->name('submit');
    Route::post('/student/submit-up', 'Fteam\Topic\Controllers\TopicController@upload')->name('submit-up');


    Route::get('/student/submit-down', 'Fteam\Topic\Controllers\TopicController@getfile');


    Route::get('users', [
            'uses' => 'Fteam\Topic\Controllers\StudentController@loadPage'
    ]);
});

