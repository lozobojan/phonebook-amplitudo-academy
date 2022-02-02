<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;

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
})->name('welcome');
Route::view('/welcome', 'welcome');

// Route::get("/contacts", [TestController::class, "showContacts"]);
// Route::get("/contacts/{id}/details", [TestController::class, "showSingleContact"])->name("single-contact");
// Route::post("/contacts", [TestController::class, "saveContact"]);

Route::resource("/contact", ContactController::class);
Route::resource("/city", CityController::class);

Route::get("/about", [TestController::class, "about"]);
Route::get("/country", [\App\Http\Controllers\CountryController::class, "index"]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
