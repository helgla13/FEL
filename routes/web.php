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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('main', function () {
    return view('main');
});

Route::get('/', ['as' => 'pages', 'uses' => 'PageController@index']);
Route::get('/about', ['as' => 'pages', 'uses' => 'PageController@about']);
Route::get('/news', ['as' => 'pages', 'uses' => 'PageController@news']);

Route::get('*', ['as' => 'pages', 'uses' => 'PageController@newsleft']);

Route::get('/specialization', ['as' => 'pages', 'uses' => 'PageController@specialization']);
Route::get('/firstzno', ['as' => 'pages', 'uses' => 'PageController@firstzno']);
Route::get('/firstms', ['as' => 'pages', 'uses' => 'PageController@firstms']);
Route::get('/fifthyear', ['as' => 'pages', 'uses' => 'PageController@fifthyear']);
Route::get('/scientific_school', ['as' => 'pages', 'uses' => 'PageController@scientific_school']);
Route::get('/scientific_groups', ['as' => 'pages', 'uses' => 'PageController@scientific_groups']);
Route::get('/opendays', ['as' => 'pages', 'uses' => 'PageController@opendays']);
Route::get('/rozklad', ['as' => 'pages', 'uses' => 'PageController@rozklad']);
Route::get('/kuratory', ['as' => 'pages', 'uses' => 'PageController@kuratory']);
Route::get('/navchalni_plany', ['as' => 'pages', 'uses' => 'PageController@navchalni_plany']);
Route::get('/student_life', ['as' => 'pages', 'uses' => 'PageController@student_life']);
//Route::get('/profile', 'PageController@profile');
//Route::get('/profile', 'PageController@notprofile');
Route::get('/file_archive', ['as' => 'pages', 'uses' => 'PageController@file_archive']);


Route::get('/news/{id}', 'NewsaboutController@index')->name('newsShow');
Route::get('/teachers', ['as' => 'pages', 'uses' => 'TeachersController@index']);
Route::get('/teachers/{id}', 'TeachersController@show')->name('teachersShow');


Route::get('/search', 'SearchController@index');


Route::group(['prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware'=>'admin'
], function()
{
    Route::get('adminka/users', 'AdminController@adminUsers');
    Route::post('adminka/users/{id}/{status}', 'AdminController@renewusers');
    Route::get('adminka/pages', 'AdminController@adminPages');
    Route::get('adminka/pages/pages_edit/{id}', 'AdminController@adminPagesedit')->name('pegShow');
    Route::post('adminka/pages/pages_edit/{id}', 'AdminController@storeadminPages');

//    Route::post('adminka/pages/{id}', 'AdminController@storeadminPages');
    //Route::get('adminka/pages/{id}', 'AdminController@adminPagesselect');

    Route::get('adminka/news', 'AdminController@adminNews');

    Route::get('adminka/news/news_add', 'AdminController@adminNewsadd');
    Route::get('adminka/news/news_edit/{id}', 'AdminController@adminNewsedit')->name('newssShow');
    Route::post('adminka/news/news_add', 'AdminController@storeadminNewsadd');
    Route::post('adminka/news/news_edit/{id}', 'AdminController@storeadminNewsedit');

    Route::get('adminka/teachers', 'AdminController@adminTeachers');
    Route::get('adminka/teachers/teachers_add', 'AdminController@adminTeachersadd');
    Route::get('adminka/teachers/teachers_edit/{id}', 'AdminController@adminTeachersedit')->name('teachShow');
    Route::post('adminka/teachers/teachers_edit/{id}', 'AdminController@storeadminTeachersedit');
    Route::resource('adminka', 'AdminController');
});

//Route::group(['prefix' => 'admin',
//    'namespace' => 'AdminAuthentication',
//    'middleware'=>'admin'
//], function()
//{
//
//    Route::get('dashboard/news', 'AdminController@adminNews');
//    Route::get('dashboard/comments', 'AdminController@adminComments');
//    Route::get('dashboard/users', 'AdminController@adminUsersGet');
//    Route::put('dashboard/users', 'AdminController@adminUsersUpdate');
//
//    Route::resource('dashboard', 'AdminController');
//
//});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');


//Route::get('/profile/{id}', ['middleware'=>['auth'], 'uses' => 'ProfileController@index'])->name('studentsShow');
Route::get('/profile/', ['middleware'=>['auth'], 'uses' => 'ProfileController@index'])->name('studentsShow');

//Route::get('/profile', ['uses' => 'ProfileController@store']);
