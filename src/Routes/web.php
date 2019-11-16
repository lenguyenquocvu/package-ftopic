<?php

Route::group(['middleware' => ['web']], function ()
{
    Route::get('/student/submit-up',['uses' => 'Fteam\Topic\Controllers\TopicController@index'] )->name('submit');
    Route::post('/student/submit-post', 'Fteam\Topic\Controllers\TopicController@upload')->name('submit-up');
    Route::post('/student/download', 'Fteam\Topic\Controllers\TopicController@getfile')->name('download');

    
        Route::get('/user', [
                'uses' => 'Fteam\Topic\Controllers\StudentOrTeacherController@loadPage'
        ])->name('userss');    


        Route::post('/user/addproject', 
                ['uses' => 'Fteam\Topic\Controllers\TeacherController@index']
        )->name('addpro');
        
        Route::post('/user/addproject/todo', 
                ['uses' => 'Fteam\Topic\Controllers\TeacherController@addProject']
        )->name('todoaddpro');

        
        Route::post('/user/addstudent', 
                ['uses' => 'Fteam\Topic\Controllers\TeacherController@index2']
        )->name('addstu');

        Route::post('/user/addstudent/todo', 
                ['uses' => 'Fteam\Topic\Controllers\TeacherController@addStudent']
        )->name('todoaddstu');
    Route::get('/student/submit-down', 'Fteam\Topic\Controllers\TopicController@getfile');


    Route::get('/user', [
            'uses' => 'Fteam\Topic\Controllers\StudentOrTeacherController@loadPage'
    ])->name('user');;
    
//     Route::get('/users', [
//         'uses' => 'Fteam\Topic\Controllers\ShowProjectsController@showProjects'
//     ])->name('MemAndShowProjects');
});


