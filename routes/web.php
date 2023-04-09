<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/recipe');
});

Auth::routes();
Route::resource('recipe', 'RecipeController', ['only' => ['index', 'show']]);
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::resource('/recipe', 'AdminRecipeController', ['only' => [
        'index',
        'create',
        'store',
        'edit',
        'update',
        'destroy'
    ]]);
    Route::post('/confirm/{id}', 'AdminRecipeController@confirm')->name('confirm.store');
    Route::delete('/confirm/{id}', 'AdminRecipeController@deleteConfirm');
    Route::get('/confirm', 'AdminRecipeController@indexConfirm')->name('confirm.index');
});
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::resource('/pre_confirm_recipe', 'PreConfirmController', ['only' => [
        'index',
        'create',
        'store',
        'show',
        'destroy',
    ]]);
});
Route::get('/search', 'SearchRecipeController@search')->name('search');
Route::get('/search_first', 'SearchRecipeController@search_for_first');
Route::get('/search_second', 'SearchRecipeController@search_for_second');
Route::get('/search_salad', 'SearchRecipeController@search_for_salad');
Route::get('/search_snack', 'SearchRecipeController@search_for_snack');
Route::get('/search_baking', 'SearchRecipeController@search_for_baking');
Route::get('/search_dessert', 'SearchRecipeController@search_for_dessert');
Route::get('/search_drinks', 'SearchRecipeController@search_for_drinks');
Route::get('/search_by_category/{category}', 'SearchRecipeController@search_by_category');
Route::post('/comment/{id}', 'CommentsController@store');
Route::resource('comment', 'CommentsController', ['only' => ['destroy']]);

Auth::routes();
