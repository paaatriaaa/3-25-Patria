<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    return view('about', [
        "nama" => "Patria Nugrahadi",
        "email" => "patrianugrahadi@gmail.com",
        "gambar" => "pat.jpg"
    ]);
});

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Patria Nugrahadi",
        "email" => "patrianugrahadi@gmail.com",
        "gambar" => "pat.jpg",
    ]);
});
Route::resource('/contacts', ContactController::class);
use App\Http\Controllers\ContactController;

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/contacts', function () {
    return view('contacts',[
        "title" => "Contacts"
    ]);
});