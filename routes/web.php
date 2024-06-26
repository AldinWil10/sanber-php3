<?php

use App\Http\Controllers\DashboardController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'utama']);
Route::get('/register', [DashboardController::class, 'daftar']);

Route::post('/welcome', [DashboardController::class, 'welcome']);

Route::get('/index', function () {
    return view('index');
});

Route::get('/data-table', function () {
    return view('partials.data-table');
});

Route::get('/table', function () {
    return view('partials.table');
});
