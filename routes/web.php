<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.register');
// });

// Home Page URl 
Route::get('/home', [Controller::class, "showhome"]);
//About-US Page Url
Route::get('about-us', [Controller::class, "showabout"]);
//Contact-US Page Url
Route::get('/contact-us', [Controller::class, "showcontact"]);
//Service page url
Route::get('/service', [Controller::class, "showservice"]);
//Reservation page url      
Route::get('/reservation', [Controller::class, "showreservation"]);
// register page url
Route::get('/register', [Controller::class, "showregister"]);
//Login page url
Route::get('/login', [Controller::class, "showlogin"]);
