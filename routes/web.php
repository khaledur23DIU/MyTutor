<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/tutors-hub', function () {
    return view('tutor.tutor-hub');
})->name('tutor-hub');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
	Route::get('{user}/opinion', 'OpinionController@index')->name('opinion.index');
	Route::post('{user}/opinion', 'OpinionController@store')->name('opinion.store');
	Route::get('{user}/opinion/edit/{id}', 'OpinionController@edit')->name('opinion.edit');
	Route::put('{user}/opinion/{id}', 'OpinionController@update')->name('opinion.update');
	Route::delete('{user}/opinion/{id}', 'OpinionController@destroy')->name('opinion.destroy');
});

