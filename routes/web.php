<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'Test';
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('movies', 'App\Http\Controllers\MovieController', [
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::resource('reviews', 'App\Http\Controllers\ReviewController', [
    'middleware'=> ['auth:sanctum', 'verified']
]);

Route::get('prueba', function(){
    return 'prueba';
} );