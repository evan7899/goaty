<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Goat;
use Illuminate\Support\Collection;

class Counter extends Component
{
    public string $username;
    public int $count;
    public Collection $goats;
    public int $price;
    public string $name;


    public function mount(){
        $this->username ="jhon doe";
        $this->count=0;
        $this->goats = Goat::all()->sortByDesc('id');
    }
    

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }

    public function add(){
        $g = new Goat();
        $g->name = $this->name;
        $g->price = $this->price;
        $g->color ='darkorange';
        $g->birthday = '1990-07-31';
        $g->sex = 0;
        $g->user_id =3;
        $g->save();
        $this->goats = Goat::all()->sortByDesc('id');
    }
}
