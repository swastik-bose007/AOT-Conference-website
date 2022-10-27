<?php

use App\Http\Controllers\AppControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [AppControllers\AppController::class, 'index']);
Route::get('/about', [AppControllers\AppController::class, 'about']);
Route::prefix('/all-events')->group(function (){
    Route::get('/', [AppControllers\AppController::class, 'allEvents']);
    Route::get('/event', [AppControllers\AppController::class, 'singleEvent']);
});
Route::prefix('/all-speakers')->group(function (){
    Route::get('/', [AppControllers\AppController::class, 'allSpeakers']);
    Route::get('/speaker', [AppControllers\AppController::class, 'singleSpeaker']);
});
Route::get('/call-for-paper', [AppControllers\AppController::class, 'callForPaper']);
Route::get('/organizer', [AppControllers\AppController::class, 'organizer']);
Route::prefix('/all-blogs')->group(function (){
    Route::get('/', [AppControllers\AppController::class, 'allBlogs']);
    Route::get('/blog', [AppControllers\AppController::class, 'singleBlog']);
});
Route::get('/contact-us', [AppControllers\AppController::class, 'contact']);
Route::get('/accomodation', [AppControllers\AppController::class, 'accomodation']);
Route::get('/allTickets', [AppControllers\AppController::class, 'allTickets']);
