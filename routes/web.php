<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;

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

// Route::view('/', 'welcome');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::post('/message', [HomeController::class, 'message'])->name('message.send');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/mission', [DashboardController::class, 'missionIndex'])->name('mission.index');
    Route::get('/mission/create', [DashboardController::class, 'missionAdd'])->name('mission.create');
    Route::post('/mission/store', [DashboardController::class, 'missionStore'])->name('mission.store');
    Route::get('/mission/edit/{id}', [DashboardController::class, 'missionEdit'])->name('mission.edit');
    Route::get('/mission/status/{id}', [DashboardController::class, 'missionStatus'])->name('mission.show');
    Route::get('/message/status/{id}', [DashboardController::class, 'messageStatus'])->name('message.show');
    Route::post('/mission/update}/{id}', [DashboardController::class, 'missionUpdate'])->name('mission.update');
    Route::get('/messages', [DashboardController::class, 'MessageIndex'])->name('messages.index');
    Route::post('/logout', [Controller::class, 'logout'])->name('logout');


    // guide url
    Route::resource('guides', GuideController::class);
    Route::resource('users', UserController::class);


});

require __DIR__.'/auth.php';
