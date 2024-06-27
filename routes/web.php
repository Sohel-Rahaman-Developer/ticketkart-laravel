<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganiserController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class, 'index'])->name('login');
Route::post('login', [UserController::class, 'authentication']);
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('setting-organiser', [OrganiserController::class, 'index'])->name('organiser.select');
    Route::get('add-organiser', [OrganiserController::class, 'create'])->name('organiser.create');
    Route::post('store-organiser', [OrganiserController::class, 'store'])->name('organiser.store');
    Route::get('edit-organiser', [OrganiserController::class, 'edit'])->name('organiser.edit');
    Route::post('update-organiser', [OrganiserController::class, 'update'])->name('organiser.update');

    //Events Section
    Route::resource('events', EventController::class);

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
