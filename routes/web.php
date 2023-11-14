<?php

use Illuminate\Support\Facades\Route;
use App\Models\Goat;
use App\Http\Controllers\GoatsController;

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
//pour créer une chèvre
Route::get('/goats/create', [GoatsController::class, 'create']);

// affiche tout les goats
Route::get('/goats', [GoatsController::class, 'index']);

//persiste une chèvre dans la bdd
Route::post('/goats', [GoatsController::class, 'store']);

//affiche une goat voulu
Route::get('/goats/{goat}', [GoatsController::class, 'show']);

Route::get('/goats/{goat}/edit', [GoatsController::class, 'edit']);

Route::patch('/goats/{goat}', [GoatsController::class, 'update']);

Route::delete('/goats/{goat}', [GoatsController::class, 'destroy']);

Route::get('/', function () {
    return redirect('/goats');
});