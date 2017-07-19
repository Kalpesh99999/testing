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
use App\User;

Route::get('/', function () {
    return view('home');
});

//Navigation - Courses
Route::get('/courses', 'CourseController@index');
Route::get('/courses/{oem_name_slug}', 'CourseController@oemCourses'); //Return Selected OEM course page
Route::get('/courses/{id}/{course_id}', 'CourseController@getCourseList');
Route::get('/courses/{oem_id}/{course_id}/{lesson_id}', 'CourseController@getLesson'); //Get Post/Lesson page




//Navigation - Pricing
Route::get('/pricing/', function () {
    return view('pricing');
});

//Navigation - FAQ
Route::get('/faq', function () {
    return view('faq');
});

//Contact Form
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@store');

//test

Route::get('/pricing/{id}','ContactController@getPost');

//Route::get('/','ContactController@test');

//Wordpress
Route::get('/wp','wpController@index');



Route::get('/createpoly/','PurchaseController@addPurchase');


Route::get('/test/',function(){

   // return view('home');
    dd(User::where('id',1)->value('TokenBalance'));

});

Route::get('/list/',function(){

    // return view('home');
    dd(User::where('id',1)->value('TokenBalance'));

});

//Lesson Controller
Route::resource('lessons', 'LessonController');

