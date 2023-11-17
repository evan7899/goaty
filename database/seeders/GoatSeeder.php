<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Goat;

class GoatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cpt = 1;
        $g = new Goat();
        $g->name = "jeanne";
        $g->price = 18000;
        $g->sex = true;
        $g->color="darkblue";
        $g->birthday="2004-02-06";
        $g->image_path = '/goat_'.$cpt++.'.jpg';
        $g->user_id=1;

        $g->save();

        $g2 = new Goat();
        $g2->name = "jean";
        $g2->price = 500;
        $g2->sex = false;
        $g2->color="pink";
        $g2->birthday="2004-05-15";
        $g2->image_path = '/goat_'.$cpt++.'.jpg';
        $g2->user_id=1;

        $g2->save();

        $g3 = new Goat();
        $g3->name = "bruno";
        $g3->price = 5;
        $g3->sex = false;
        $g3->color="red";
        $g3->birthday="1996-02-06";
        $g3->image_path = '/goat_'.$cpt++.'.jpg';
        $g3->user_id=2;

        $g3->save();

        $g4 = new Goat();
        $g4->name = "evan";
        $g4->price = 55500;
        $g4->sex = false;
        $g4->color="black";
        $g4->birthday="2010-11-20";
        $g4->image_path = '/goat_'.$cpt++.'.jpg';
        $g4->user_id=2;

        $g4->save();
    }
}
