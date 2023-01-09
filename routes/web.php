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

//  Route::get('/projectfair', function () {
//      return view('login\index');
//  });


// Route::post('/login', [AuthController::class, 'authenticate']);

// Route::get('/dashboard', function () {
//     // 'uses' => 'DashboardController@index',
//     // 'as' => 'dashboard.index',
//     return view('greetings\index');
// }
// );
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'greetings'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Route::get('/greetings', [App\Http\Controllers\HomeController::class, 'greetings'])->name('/');
// Route::get('/jobpage', [App\Http\Controllers\HomeController::class, 'jobpage'])->name('jobpage');
Route::get('/fair', [App\Http\Controllers\routeman::class, 'pekerjalepas'])->name('pekerjalepas');
Route::get('/job', [App\Http\Controllers\routeman::class, 'jobseek'])->name('jobSeek');
//Route::get('/profil', [App\Http\Controllers\routeman::class, 'profilee'])->name('profile');
//Route::get('/profiledit', [App\Http\Controllers\routeman::class, 'profileedit'])->name('profile');
Route::post('/uploadprofile', [App\Http\Controllers\PhotoController::class, 'update'])->name('profiledit');
Route::post('/uploadcompany', [App\Http\Controllers\CompanyController::class, 'update']);
Route::get('/tetet', [App\Http\Controllers\routeman::class, 'testups'])->name('test');

Route::resource('/profiledit', \App\Http\Controllers\PhotoController::class);

Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index'])->name('data');
Route::get('/faz', [App\Http\Controllers\routeman::class, 'faz'])->name('FAQ');


