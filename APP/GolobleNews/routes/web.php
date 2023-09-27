<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;


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
Route::get('golobleNews/home', [ViewController::class, 'index']);
Route::get('category/{id}/show', [ViewController::class, 'category'])->where('id', '[0-9]+');
Route::get('news/{id}/show', [ViewController::class, 'news'])->where('id', '[0-9]+');
Route::middleware('auth')->get('dashbord/golobleNews', [PageController::class, 'index']);
Route::middleware('auth')->prefix('cpanel')->group(function () {
    Route::prefix('editor')->controller(EditorController::class)->group(function () {
        /*add new editor pages*/
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        /*show all editor page*/
        Route::get('/all', 'all');
        /*delete editor page*/
        Route::delete('/{id}/delete', 'delete')->where('id', '[0-9]+');
        /*update and display editor pages */
        Route::get('/{id}/show', 'show')->where('id', '[0-9]+');;
        Route::patch('/{id}/update', 'update')->where('id', '[0-9]+');
    });
    Route::prefix('category')->controller(CategoryController::class)->group(function () {
        /*add new category pages*/
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        /*show all category page*/
        Route::get('/all', 'all');
        /*delete category page*/
        Route::delete('/{id}/delete', 'delete')->where('id', '[0-9]+');
        /*update and display category pages */
        Route::get('/{id}/show', 'show')->where('id', '[0-9]+');;
        Route::patch('/{id}/update', 'update')->where('id', '[0-9]+');
    });
    Route::prefix('news')->controller(NewsController::class)->group(function () {
        /*add new news pages*/
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        /*show all news page*/
        Route::get('/all', 'all');
        /*delete news page*/
        Route::delete('/{id}/delete', 'delete')->where('id', '[0-9]+');
        /*update and display news pages */
        Route::get('/{id}/show', 'show')->where('id', '[0-9]+');;
        Route::patch('/{id}/update', 'update')->where('id', '[0-9]+');
    });
});;

Auth::routes(['register' => false]);
