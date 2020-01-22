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
Route::get('/',function (){
    return redirect('/login');
});
//superadmin
Route::group(['middleware' => ['auth']], function() {
    Route::get('/backend', 'SuperAdminController@index');


//student
    Route::get('/student/getdata', 'StudentController@getData')->name('student.getData');
    Route::resource('class', 'ClassController');
    Route::resource('student', 'StudentController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('timetable', 'TimetableController');
    Route::resource('enroll', 'EnrolmentController');
    Route::resource('subject', 'SubjectController');
    Route::resource('att', 'AttController');
    Route::resource('exam', 'ExamController');
    Route::get('/download/{file}', 'ExamController@download');
    Route::post('/search', 'AttController@search')->name('search');
    Route::get('/students/{id}', 'StudentController@destroy');
    Route::get('/teachers/{id}', 'TeacherController@destroy');
    Route::get('/timetables/{id}', 'TimetableController@destroy');
    Route::get('/enrolls/{id}', 'EnrolmentController@destroy');
    Route::get('/classes/{id}', 'ClassController@destroy');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});
