<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goat;

class GoatsController extends Controller
{
    public function index(){
        $goats= Goat::all();
        return view('goats.index', compact('goats'));
    }
    public function show(Goat $goat){
        return view('goats.show', compact('goat'));
    }
    public function create(){
        return view('goats.create');
    }
    public function update(Goat $goat){
        request()->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday'=> 'required|date',
        ]);
    
        $goat->name = request()->name;
        $goat->price = request()->price;
        $goat->color = request()->color;
        $goat->sex = request()->sex == 'Mr.' ? true : false ;
        $goat->birthday = request()->birthday;
        $goat->save();
        return redirect('/goats/'.$goat->id);
        
    }

    public function edit(Goat $goat){
    return view('goats.edit', compact('goat'));
    }
    public function destroy(Goat $goat){
    $goat->delete();
    return redirect('/goats');
    }

    public function store(){
        request()->validate([
            'price' => 'required|integer',
            'name' => 'required|min:5|max:25',
            'color' => 'required',
            'birthday'=> 'required|date',
        ]);
    
        $g=new Goat();
        $g->name = request()->name;
        $g->price = request()->price;
        $g->color = request()->color;
        $g->sex = request()->sex == 'Mr.' ? true : false ;
        $g->birthday = request()->birthday;
        $g->save();
        return redirect('/goats');
    }
}
