<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Goat;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goats', function(){
return Goat::all();
});

Route::get('/goats/{id}', function($id){
return Goat::find($id);
});

Route::post('/goats', function(){

    $validator=Validator::make(request()->all(),[
        'price' => 'required|integer',
        'name' => 'required|min:5|max:25',
        'color' => 'required',
        'birthday'=> 'required|date',
    ]);
    if($validator->fails()){
        return response()->json([
            'message'=>$validator->messages(),
         ], 422);
    }

    $g=new Goat();
    $g->name = request()->name;
    $g->price = request()->price;
    $g->color = request()->color;
    $g->sex = request()->sex == 'Mr.' ? true : false ;
    $g->birthday = request()->birthday;
    $g->user_id = Auth::user() ? Auth::user()->id : 0;
    $g->save();
     return response()->json([
        'message'=>'Goat created'
     ], 201);
});

// Route::patch('/goats/{id}', function(Goat $goat){
//     $goat->name = request()->name;
//     $goat->price = request()->price;
//     $goat->color = request()->color;
//     $goat->sex = request()->sex == 'Mr.' ? true : false ;
//     $goat->birthday = request()->birthday;
//     $goat->save();
//     return 'update';
// }); 

// // Route::delete