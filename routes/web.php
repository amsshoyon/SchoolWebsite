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

// Route::get('/', function () {
//     return view('Page.index');
// });
Route::get('/', 'PageController@index');

Route::get('/About', 'PageController@about');

Route::get('/Members/GovtBody', 'PageController@GovtBody');
Route::get('/Members/Teachers', 'PageController@teachers');
Route::get('/Members/Staffs', 'PageController@staffs');

Route::get('/Payment', function () {
    return view('Page.rules');
});




//Admin Panal

Auth::routes();

Route::get('/Admin', 'HomeController@index')->name('home');

//Dashboard Profile Section
Route::resource('/Dashboard/EditProfile', 'ProfileController');

//Dashboard Email Section
Route::resource('/Dashboard/EditEmail', 'EmailController');

//Dashboard Password Section
Route::resource('/Dashboard/EditPassword', 'PasswordController');

//Dashboard Inbox Section
Route::resource('/Dashboard/SentMessages', 'SentMsgController');


//Dashboard Inbox Section
Route::resource('/Dashboard/Trash', 'TrashController');

//Dashboard Inbox Section
Route::resource('/Dashboard/Draft', 'DraftController');







//Achievements
Route::resource('/Dashboard/Achievement', 'AchievementController');

Route::post('/Dashboard/Achievement', 'AchievementController@store');

Route::delete('/Dashboard/Achievement/{id}', 'AchievementController@destroy');


//slider images
Route::resource('/Dashboard/Slider', 'SliderImageController');

Route::post('/Dashboard/Slider', 'SliderImageController@store');

Route::delete('/Dashboard/Slider/{id}', 'SliderImageController@destroy');
 

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
Route::resource('/Dashboard/einfo', 'E_LinkController');

// Important Link
Route::resource('/Dashboard/importantlink', 'ImpLinkController');

// Social Media Link
//Route::resource('/Dashboard/sociallink', 'SocialLinkController');

// Message
Route::resource('/Dashboard/message', 'MessageController');

// Message
// Route::resource('/Dashboard/website', 'WebsiteController');

// Message
Route::resource('/Dashboard/event', 'EventController');
