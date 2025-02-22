<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ListingController;
use App\Http\Controllers\JobsController;

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

Route::get('/old', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landingpage');
});


Route::get('/AdvertDetails', function () {
    return view('oldjobdetails');
});

Route::get('/AdvertDetailsdata', [ListingController::class, 'AdvertDetails'])->name('addata');
Route::post('job/store', [JobsController::class, 'store'])->name('jobs.store');


Route::group(['prefix' => 'admins'], function() {

    Route::get('/', [ListingController::class, 'home'])->name('dashone');
    Route::get('/forms', [ListingController::class, 'form'])->name('dashoneform');
    
    Route::get('/Table', [ListingController::class, 'table'])->name('dashonetable');
    Route::get('/blank', [ListingController::class, 'home'])->name('dashoneblank');
    Route::get('/formtable', [ListingController::class, 'formtable'])->name('dashoneformtable');


    Route::get('/RegisterVacancy', [JobsController::class, 'vacancyform'])->name('vacancyform');
});