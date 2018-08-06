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

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'CoursesController@index')->name('courses');
Route::get('/evaluations', 'EvaluationsController@index')->name('evaluations');
Route::get('/grades', 'GradesController@index')->name('grades');
Route::get('/housing', 'HousingController@index')->name('housing');
Route::get('/semester', 'SemestersController@index')->name('semester');
Route::post('/semester', 'SemestersController@session')->name('semester.session');
Route::get('/students', 'StudentsController@index')->name('students');
Route::get('/students/add', 'StudentsController@add')->name('students.add');
Route::post('/students/create', 'StudentsController@create')->name('students.create');