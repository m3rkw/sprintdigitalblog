<?php

use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BlogPostsController::class, 'index']);

Route::get('/post/create', [BlogPostsController::class, 'create']);
Route::post('/post', [BlogPostsController::class, 'store']);
Route::get('/post/{id}', [BlogPostsController::class, 'show']);
Route::get('/post/{id}/edit', [BlogPostsController::class, 'edit']);
Route::patch('/post/{id}', [BlogPostsController::class, 'update']);
Route::delete('/post/{id}', [BlogPostsController::class, 'delete']);

Route::post('/post/{id}/comment/create', [CommentsController::class, 'create']);
Route::patch('/post/{id}/comment/edit', [CommentsController::class, 'edit']);
Route::delete('/post/{id}/comment/delete', [CommentsController::class, 'delete']);
