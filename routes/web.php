<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

//HOMEPAGE & PUBLIC ROUTES
Route::get('/', function () {

    return view('dashboard');
})->name('home');

//REQUIRE LOGGED IN ROUTES
Route::middleware("auth")->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('users.dashboard');
    Route::get('/selectType', [ArtifactController::class, 'typeSelect'])->name('typeselect');
});


//ADMIN RESTRICTED VIEWS
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/collections', [AdminController::class, 'collections'])->name('collections');
    Route::post('/admin/collections', [AdminController::class, 'collectionsPost'])->name('collections.post');
    Route::post('/admin/updatecollections', [AdminController::class, 'collectionsUpdate'])->name('update.collections');
    Route::get('/admin/update/{id}', [AdminController::class, 'reUpdate'])->name('return.update');
    Route::post('/admin/updatecollectionpush', [AdminController::class, 'pushUpdate'])->name('push.collections');
});


//ALL USER ACCESS TO LOGIN
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::post('/register', [AuthController::class, "registerPost"])->name('register.post');
Route::post('/logout', [AuthController::class, "logout"])->name('logout');
