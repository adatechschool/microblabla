<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
Route::resource('posts', PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::group(attributes: ['middleware' => 'auth'], routes: function () {
    Route::get('/dashboard', function () {
        return view(view: 'dashboard');
    })->name('dashboard');
    Route::view('/profile', view:'profile')->name(name:'profile');
    Route::put('/profile', action:[ProfileController::class, 'update'])->name( name:'profile.update');
});

require __DIR__.'/auth.php';
