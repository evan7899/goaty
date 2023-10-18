<?php

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
//pour créer une chèvre
Route::get('/goats/create', function (){
    return view('goats.create');
});

// affiche tout les goats
Route::get('/goats', function () {
    $goats=[
        ['id'=> 0, 'nom'=>'boby','prix'=>50],
        ['id'=> 1, 'nom'=>'bobo','prix'=>100],
        ['id'=> 2, 'nom'=>'boba','prix'=>150],
        ['id'=> 3, 'nom'=>'bobu','prix'=>200],
    ];
    return view('goats.index', compact('goats'));
    
    
});

//persiste une chèvre dans la bdd
Route::post('/goats', function (){
    dd('POST goat');
});

//affiche une goat voulu
Route::get('/goats/{id}', function ($id){
    $goats=[
        ['id'=> 0, 'nom'=>'boby','prix'=>50],
        ['id'=> 1, 'nom'=>'bobo','prix'=>100],
        ['id'=> 2, 'nom'=>'boba','prix'=>150],
        ['id'=> 3, 'nom'=>'bobu','prix'=>200],
    ];
    $goat = $goats[$id];
    return view('goats.show', compact('goat'));
});



/*Route::get('/goats', function (){
    return view('store');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coucou',function (){
    $nom = 'evan';
    return view('coucou', [
    'Lenom' => $nom
    ]);
});
