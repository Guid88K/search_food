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
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'SearchRecipeController@search')->name('search');
Route::get('/search_first', 'SearchRecipeController@search_for_first');
Route::get('/search_second', 'SearchRecipeController@search_for_second');
Route::get('/search_salad', 'SearchRecipeController@search_for_salad');
Route::get('/search_snack', 'SearchRecipeController@search_for_snack');
Route::get('/search_baking', 'SearchRecipeController@search_for_baking');
Route::get('/search_dessert', 'SearchRecipeController@search_for_dessert');
Route::get('/search_drinks', 'SearchRecipeController@search_for_drinks');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
