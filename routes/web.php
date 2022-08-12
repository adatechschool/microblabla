<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\ProfileController;
use GuzzleHttp\Psr7\Uri;
use Symfony\Component\HttpKernel\Profiler\ProfilerStorageInterface;

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

Route::group(attributes: ['middleware' => 'auth'], routes: function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');
    //Route::view('profile','profile')->name('profile');
     Route::view('profile','profile')->name('profile');
    // Route::put('profile', [ProfileController::class, 'update'])->name('profile');
    //Route::put('profile', [])->name('profile');
    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';
