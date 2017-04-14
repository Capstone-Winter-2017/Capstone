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

Route::resource('characters', 'CharactersController');

//Route::get('/characters/name', 'HomeController@ccname');
//
//Route::get('/characters/class', 'HomeController@ccclass');
//
//Route::get('/characters/race', 'HomeController@ccrace');
//
//Route::get('/characters/basicinfo', 'HomeController@ccbasicinfo');
//
//Route::get('/characters/detailedinfo', 'HomeController@ccdetailedinfo');
//
//Route::get('/characters/stats', 'HomeController@ccstats');
//
//Route::get('/characters/review', 'HomeController@ccreview');

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