<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HistoryController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/', [HomeController::class, 'index'])->name('root');
Route::get('/index', function () {
    return redirect('/home');
});


Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
