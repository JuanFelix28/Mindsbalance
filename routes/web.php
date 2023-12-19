<?php

use App\Http\Controllers\MainController;
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

// move page
Route::get('/login', [MainController::class, 'loginPage']);
Route::get('/register', [MainController::class, 'registerPage']);
Route::get('/', [MainController::class, 'HomePage']);
Route::get('/contactus', [MainController::class, 'ContactUsPage'])->middleware('isLogin');
Route::get('/detail/{id}', [MainController::class, 'detailPage'])->middleware('isLogin');

// authentication
Route::post('/signIn', [MainController::class, 'signin']);
Route::get('/logout', [MainController::class, 'signout']);
Route::post('/signUp', [MainController::class, 'signup']);
