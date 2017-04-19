<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/member', 'HomeController@index');

Route::resource('characters', 'CharactersController');

Route::resource('users', 'UsersController');

Route::resource('campaigns', 'CampaignsController');

Route::resource('groups', 'GroupsController');

Route::resource('sessions', 'SessionsController');

Route::resource('usercampaigns', 'UserCampaignsController');

Route::resource('usercharacters', 'UserCharactersController');

Route::resource('usergroups', 'UserGroupsController');

Route::resource('usersessions', 'UserSessionsController');

Route::resource('friends', 'FriendsController');

Route::get('/test', function () {
    return view ('test');
});

//Route::get('/create_character/name', function () {
//    return view ('character_name');
//});
//
//Route::get('/create_character/class', function () {
//    return view ('character_select_class');
//});
//
//Route::get('/create_character/race', function () {
//    return view ('character_select_race');
//});
//
//Route::get('/create_character/basic_info', function () {
//    return view ('character_basic_information');
//});