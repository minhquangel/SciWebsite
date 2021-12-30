<?php

Route::group(['namespace' => 'Client'], function() {
    Route::get('/', 'HomeController@index')->name('root');
    Route::get('/student', 'StudentController@index')->name('student');
    Route::get('/tourism', 'TourismController@index')->name('tourism');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::post('/service', 'ServiceController@store')->name('service.update');
    Route::get('/survey/init', 'SurveyController@init')->name('survey.init');
    Route::get('/survey/{id}', 'SurveyController@new')->name('survey.new');
    Route::post('/survey/{id}', 'SurveyController@next')->name('survey.next');
    Route::get('/blog', 'BlogController@index')->name('blog.list');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/sign_in', 'Auth\LoginController@showLoginForm' )->name('admin.sign_in');
    Route::post('/sign_in', 'Auth\LoginController@login');
    Route::post('/sign_out', 'Auth\LoginController@logout')->name('admin.sign_out');

    Route::namespace('Blog')->prefix('blog')->group(function () {
        Route::get('', 'ListController@index')->name('admin.blog.list');
        Route::post('', 'StoreController@store')->name('admin.blog.store');
        Route::get('/create', 'CreateController@create')->name('admin.blog.create');
        Route::get('/{id}', 'ShowController@show')->name('admin.blog.show');
        Route::get('/{id}/edit', 'EditController@edit')->name('admin.blog.edit');
        Route::post('/{id}', 'UpdateController@update')->name('admin.blog.update');
        Route::delete('/{id}', 'DestroyController@destroy')->name('admin.blog.destroy');
    });

    Route::namespace('Survey')->prefix('survey')->group(function () {
        Route::get('', 'ListController@index')->name('admin.survey.list');
        Route::get('/{id}', 'ShowController@show')->name('admin.survey.show');
    });
});
