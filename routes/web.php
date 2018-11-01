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
    return view('Page.index');
});

Route::get('/About', function () {
    return view('Page.about');
});

Route::get('/Payment', function () {
    return view('Page.rules');
});


Route::get('/Members/GovtBody', function () {
    return view('Page.members');
});


//Admin Panal

Auth::routes();

Route::get('/Admin', 'HomeController@index')->name('home');

//Achievements
Route::resource('/Dashboard/Achievement', 'AchievementController');

Route::post('/Dashboard/Achievement', 'AchievementController@store');

Route::delete('/Dashboard/Achievement/{id}', 'AchievementController@destroy');


//slider images
Route::resource('/Dashboard/Slider', 'SliderController');

Route::post('/Dashboard/Slider', 'SliderController@store');

Route::delete('/Dashboard/Slider/{id}', 'SliderController@destroy');


//Members 
Route::resource('/Dashboard/Member', 'MemberController');

Route::post('/Dashboard/Member', 'MemberController@store');

Route::delete('/Dashboard/Member/{id}', 'MemberController@destroy');


//About
Route::resource('/Dashboard/About', 'AboutController');


// Message
Route::resource('/Dashboard/Messages', 'MessageController');



// Notice Board Route
Route::resource('/Dashboard/notice', 'NoticeController');

// Academic File
Route::resource('/Dashboard/academic', 'AcademicFileController');

// E-Info
Route::resource('/Dashboard/einfo', 'EInfoController');

// Important Link
Route::resource('/Dashboard/importantlink', 'ImportantLinkController');

// Social Media Link
Route::resource('/Dashboard/sociallink', 'SocialLinkController');

// Achivement
Route::resource('/Dashboard/achivement', 'AchivementController');

// Message
Route::resource('/Dashboard/message', 'MessageController');

// Message
Route::resource('/Dashboard/website', 'WebsiteController');

// Message
Route::resource('/Dashboard/event', 'EventController');
