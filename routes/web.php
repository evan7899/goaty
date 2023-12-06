<?php

use Illuminate\Support\Facades\Route;
use App\Models\Goat;
use App\Http\Controllers\GoatController;
use App\Http\Middleware\IsAdmin;

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
    return redirect('goats');
});

Route::resource('goats', GoatController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin', function (){
        return view('admin-panel');
    })->name('administration')->middleware('is_admin');

});

Route::get('/test-livewire', function(){
    return view('counter-container');
});

