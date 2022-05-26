<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\Admin\AdminMovieController;
use App\Http\Controllers\Admin\AdminTicketController;

use App\Http\Controllers\MovieController;


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

Route::get('/', [SiteController::class, 'index']);

/* Locations */
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/locations/{id}', [LocationController::class, 'show']);

/* Ticket */
Route::get('/tickets/{id}', [TicketController::class, 'create']);
Route::post('/tickets/store', [TicketController::class, 'store']);

/* Movies */
Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);


/* Admin */
Route::prefix('/admin')->group(function() {

    /* Movies */
    Route::get('/movies', [AdminMovieController::class, 'index'])->name('admin.movies.index');
    Route::get('/movies/create', [AdminMovieController::class, 'create'])->name('admin.movies.create');
    Route::post('/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');
    Route::get('/movies/{id}', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
    Route::patch('/movies/{id}', [AdminMovieController::class, 'update'])->name('admin.movies.update');
    Route::delete('/movies/{id}', [AdminMovieController::class, 'destroy'])->name('admin.movies.destroy');

    /* Tickets */
    Route::get('/tickets', [AdminTicketController::class, 'index'])->name('admin.tickets.index');
    Route::get('/tickets/create', [AdminTicketController::class, 'create'])->name('admin.tickets.create');
    Route::post('/tickets', [AdminTicketController::class, 'store'])->name('admin.tickets.store');
    Route::get('/tickets/{id}', [AdminTicketController::class, 'edit'])->name('admin.tickets.edit');
    Route::patch('/tickets/{id}', [AdminTicketController::class, 'update'])->name('admin.tickets.update');
    Route::delete('/tickets/{id}', [AdminTicketController::class, 'destroy'])->name('admin.tickets.destroy');


});


