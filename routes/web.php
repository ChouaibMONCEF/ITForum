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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/question/add', [App\Http\Controllers\QuestionsController::class, 'create'])->name('addQuestion');

Route::post('/question/store', [App\Http\Controllers\QuestionsController::class, 'store'])->name('storeQuestion');

Route::get('/forum', [App\Http\Controllers\QuestionsController::class, 'show'])->name('forumQuestion');

Route::post('/question/edit', [App\Http\Controllers\QuestionsController::class, 'edit'])->name('editQuestion');

Route::post('/question/delete', [App\Http\Controllers\QuestionsController::class, 'destroy'])->name('deleteQuestion');

Route::post('/question/update', [App\Http\Controllers\QuestionsController::class, 'update'])->name('updateQuestion');

Route::get('/questions', [App\Http\Controllers\QuestionsController::class, 'index'])->name('listingQuestion');
