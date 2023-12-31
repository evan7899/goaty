<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goat;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class GoatController extends Controller
{
    public function index(){
        $goats= Goat::all();
        return view('goats.index', compact('goats'));
    }

    public function show(Goat $goat){
        $birthdayString = $goat->birthday;
        $birthday = Carbon::parse($birthdayString);
        $dateformat = $birthday->isoFormat('LL');
        return view('goats.show', compact('goat'), compact('dateformat'));
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
        $goat->sex = request()->sex == 'on' ? true : false ;
        $goat->birthday = request()->birthday;
        $goat->save();
        return redirect('/goats/'.$goat->id);
        
    }

    public function edit(Goat $goat){
            // dd( $goat->sex);
        $goat = Goat::find($goat->id);
        $isFemale = $goat->sex === 'Female';
        

    return view('goats.edit', compact('goat', 'isFemale'));
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
        // gestion image
        $dst = request()->file('image');
        $new = $dst->getClientOriginalName();
        $path = 'img/' . $new;
        Storage::putFileAs('public/img', $dst , $new);

  // creer goat
        $g=new Goat();
        $g->name = $request->input('name');
        $g->price = $request->input('price');
        $g->color = $request->input('color');
        $g->sex = $request->input('sex') == 'on' ? true : false ;
        $g->birthday = $request->input('birthday');
        $g->image_path = $path;
        $g->user_id = Auth::user() ? Auth::user()->id : 0;
        $g->save();

        return redirect('/goats');
    }
}
