<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoneController;
use App\Http\Controllers\CeramicController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddleware;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Route;

//HOMEPAGE & PUBLIC ROUTES
Route::get('/', function () {
    return view('dashboard');
})->name('home');
Route::get('view/{id}', [ArtifactController::class, 'singleItem']);
Route::get('/testhome', function () {
    return view('layouts.newapp');
});
Route::get('/revamp', function () {
    return view('layouts.dashboard2');
});
Route::get('/query/artifact', [QueryController::class, 'queryArtifact'])->name('query.artifact');

//REQUIRE LOGGED IN ROUTES
Route::middleware("auth")->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('users.dashboard');
    Route::get('/selectType', [ArtifactController::class, 'typeSelect'])->name('typeselect');
    Route::get('/getForm/{collection}/{art_type}', [ArtifactController::class, 'getForm']);
    Route::get('/enteredby/{user}', [ArtifactController::class, 'savedList'])->name('entered.by');


    //REQUIRE CERAMIC ROUTES
    Route::post('/saveCeramic', [CeramicController::class, 'saveCeramic'])->name('save.ceramic');
    Route::post('/submitBone', [BoneController::class, 'submitBone'])->name('submit.bone');

    //REQUIRE BONE ROUTES
});


//ADMIN RESTRICTED VIEWS
Route::middleware([AdminMiddleware::class])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/collections', [AdminController::class, 'collections'])->name('collections');
    Route::post('/admin/collections', [AdminController::class, 'collectionsPost'])->name('collections.post');
    Route::post('/admin/updatecollections', [AdminController::class, 'collectionsUpdate'])->name('update.collections');
    Route::get('/admin/update/{id}', [AdminController::class, 'reUpdate'])->name('return.update');
    Route::post('/admin/updatecollectionpush', [AdminController::class, 'pushUpdate'])->name('push.collections');
    Route::get('/verifyData', [AdminController::class, 'verifyData'])->name('verify.data');
    Route::post('/verifyData', [AdminController::class, 'checkoutData'])->name('checkout.data');
    Route::post('/releaseData', [AdminController::class, 'releaseData'])->name('release.data');
    Route::get('/reviewData/{user}/{artifact_type}/{id}', [AdminController::class, 'reviewData']);
    Route::post('/validateData/{id}', [CeramicController::class, 'validateCeramic']);
    Route::post('/submitData/{id}', [CeramicController::class, 'submitCeramic']);
    Route::get('/previewData/{artifact_id}/{user}', [ArtifactController::class, 'previewForm'])->name('form.preview');
});


//ALL USER ACCESS TO LOGIN
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::post('/register', [AuthController::class, "registerPost"])->name('register.post');
Route::post('/logout', [AuthController::class, "logout"])->name('logout');
