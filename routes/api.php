<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/getlist','ContactController@getList');

//Ajax Route to get list of Brands offered on the website i.e Schneider, Siemens, GE etc
Route::post('/getCourseByBrand','CourseController@getCourses');

//Ajax Route to get list of course's for a user selected brand
Route::post('/getOEMCourses/{id}','CourseController@getOEMCourses');

//Ajax Route to get list course curriculum for a user selected course
Route::post('/getCourseCurriculum/{id}','CourseController@getCourseCurriculum');

//Ajax Route to get list of oems for use in dropdown menu
Route::post('/getOemList','CourseController@getOemList');

//Ajax Route to get list of Course List for use in dropdown menu
Route::post('/getdropDownCourseList/{id}','CourseController@getdropDownCourseList');

//Ajax Route to get list of Course List for use in dropdown menu
Route::post('/showCourses/{id}','CourseController@showCourses');

//Ajax Route to get Course List for a selected brand
Route::post('/customer/ajaxupdate','AjaxController@updateCustomerRecord');

//Ajax Route to get additional data for the course. Trainer Profile/Buy Course Form
Route::post('/courses/moreinfo','AjaxController@getCourseInfo');
Route::post('/courses/selections','AjaxController@selections');
