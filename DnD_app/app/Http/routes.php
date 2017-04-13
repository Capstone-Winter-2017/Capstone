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

Route::get('/myaccount', 'HomeController@myaccount');

Route::get('/mycharacters', 'HomeController@mycharacters');

Route::get('/mycampaigns', 'HomeController@mycampaigns');

Route::get('/mysessions', 'HomeController@mysessions');

Route::get('/mygroups', 'HomeController@mygroups');

Route::get('/myfriends', 'HomeController@myfriends');

Route::get('/mymembers', 'HomeController@mymembers');

Route::get('/createcharacter/name', 'HomeController@ccname');

Route::get('/createcharacter/class', 'HomeController@ccclass');

Route::get('/createcharacter/race', 'HomeController@ccrace');

Route::get('/createcharacter/basicinfo', 'HomeController@ccbasicinfo');

Route::get('/createcharacter/additionalinfo', 'HomeController@ccdetailedinfo');

Route::get('/createcharacter/', 'HomeController@cc');

Route::get('/createcharacter/', 'HomeController@cc');

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