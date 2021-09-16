<?php

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

Route::get('/', function () {
    return view('welcomes');
});
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show'])->where('blogPost', '[0-9]+');
//note: the where() function ensures that the value in the $blogPost variable is really a integer
Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']);//shows create post
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']);//stores the created posts
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']);//shows the edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']);//commits the edited posts to the database
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);//delete the posts from the database
