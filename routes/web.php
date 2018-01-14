<?php

Route::get('/', function () {
    return view('user.welcome');
});

// route artikel //
Route::get('search','FrontController@getSearch');
Route::get('category/{id}/{slug}','FrontController@getCategory');
Route::get('/artikel','FrontController@getIndex');
Route::get('article/{slug}','FrontController@getArticle');

// route link //
Route::get('/','LinkPage@getHome');
Route::get('/companyprofile','LinkPage@getCompanyprofile');
Route::get('/contact','LinkPage@getContact');
Route::get('/gallery','LinkPage@getGallery');
Route::get('/ourclient','LinkPage@getOurclient');


