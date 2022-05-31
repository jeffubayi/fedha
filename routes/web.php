<?php

use App\Models\Staff;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ListingController;

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

// get
Route::get('/', [ListingController::class,'dashboard'])->middleware('auth');

// get
Route::get('/register', [UserController::class,'create']);

//post
Route::post('/users',  [UserController::class,'store']);

//logout
Route::post('/logout',  [UserController::class,'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// get
Route::get('/dashboard', [ListingController::class,'index'])->middleware('auth');


// get
Route::get('/settings', [ListingController::class,'settings'])->middleware('auth');

//post
Route::post('/listing',  [ListingController::class,'store']);

//create - create view
Route::get('/listing/create',  [ListingController::class,'create'])->middleware('auth');


//manage - manage view
Route::get('/listing/manage',  [ListingController::class,'manage'])->middleware('auth');

// show - Show view
Route::get('/listing/{listing}',  [ListingController::class,'show']);


// delete 
Route::delete('/listing/{listing}',  [ListingController::class,'destroy'])->middleware('auth');

//edit - edit view
Route::get('/listing/{listing}/edit',  [ListingController::class,'edit'])->middleware('auth');


// Update
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Route->Controller->Resource