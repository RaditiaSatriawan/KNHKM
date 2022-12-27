<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('login\index');
// });


// Route::post('/login', [AuthController::class, 'authenticate']);

// Route::get('/dashboard', function () {
//     // 'uses' => 'DashboardController@index',
//     // 'as' => 'dashboard.index',
//     return view('greetings\index');
// }
// );
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/greetings', [App\Http\Controllers\HomeController::class, 'greetings'])->name('greetings');
