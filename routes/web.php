<?php

use App\Http\Controllers\AdminRecipeController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\PreConfirmController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\SavedController;
use App\Http\Controllers\SearchRecipeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/recipe');
});

Auth::routes();
Route::resource('recipe', RecipeController::class)->only('index', 'show');
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::resource('recipe', AdminRecipeController::class)->only(
        'index',
        'create',
        'store',
        'edit',
        'update',
        'destroy'
    );
    Route::post('/confirm/{id}', [AdminRecipeController::class, 'show'])->name('confirm.store');
    Route::delete('/confirm/{id}', [AdminRecipeController::class, 'deleteConfirm']);
    Route::get('/confirm', [AdminRecipeController::class, 'indexConfirm'])->name('confirm.index');
});
Route::group(['middleware' => 'user', 'prefix' => 'user'], function () {
    Route::resource('/pre_confirm_recipe', PreConfirmController::class)->only(
        'index',
        'create',
        'store',
        'show',
        'destroy',
    );
    Route::resource('/recommendation', RecommendationController::class);
    Route::resource('/poll', PollController::class)->only('create', 'store');
    Route::post('/saved/{id}', [SavedController::class, 'store'])->name('saved.store');
    Route::delete('/saved/{id}', [SavedController::class, 'destroy'])->name('saved.destroy');
    Route::get('/saved/{id}', [SavedController::class, 'show']);
});
Route::get('/search', [SearchRecipeController::class, 'search'])->name('search');

Route::get('/search_by_category/{category}', [SearchRecipeController::class, 'search_by_category']);
Route::post('/comment/{id}', [CommentsController::class, 'store']);
Route::delete('/comment/{comment}', [CommentsController::class, 'destroy']);


