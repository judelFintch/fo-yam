<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActuController;

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







Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name("pages.home");
  
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/qui-sommes-nous', 'about')->name("pages.about");
    Route::get('/notre-vision', 'vision')->name("pages.vision");
    Route::get('/notre-status', 'status')->name("pages.status");
    Route::get('/notre-reglement-interieur', 'reglement')->name("pages.reglement");
});


Route::controller(ActivityController::class)->group(function () {
    Route::get('/activites-fondation-yamba', 'activity')->name("pages.activities");

});


Route::controller(JoinController::class)->group(function () {
    Route::get('/adherez-la-fondation','joint')->name("pages.joint");

});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contactez-nous','contact')->name("pages.contact");

});


Route::controller(ActuController::class)->group(function () {
    Route::get('/nos-actualites-fondation-yamba','actu')->name("pages.actu");

});

