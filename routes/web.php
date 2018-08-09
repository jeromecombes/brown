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
Route::get('/courses', 'CoursesController@index')->name('courses.index');
Route::get('/evaluations', 'EvaluationsController@index')->name('evaluations.index');
Route::get('/grades', 'GradesController@index')->name('grades.index');
Route::get('/housing', 'HousingController@index')->name('housing.index');

Route::get('/semester', 'SemestersController@index')->name('semesters.index');
Route::post('/semester', 'SemestersController@session')->name('semesters.session');

Route::get('/students/data', 'StudentsController@data')->name('students.data');
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/create', 'StudentsController@create')->name('students.create');
Route::post('/students', 'StudentsController@store')->name('students.store');
Route::get('/students/{id}', 'StudentsController@show')->name('students.show');
Route::get('/students/{id}/edit', 'StudentsController@edit')->name('students.edit');
Route::put('/students/{id}', 'StudentsController@update')->name('students.update');
Route::delete('/students/{id}', 'StudentsController@destroy')->name('students.destroy');