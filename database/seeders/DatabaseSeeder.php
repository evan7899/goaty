<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $u = new User;
        $u->name = "eferrer";
        $u->email ="eferrer@eferrer.fr";
        $u->password = Hash::make("evanferrer");
        $u->save();

        $u2 = new User;
        $u2->name = "lvandamme";
        $u2->email ="lvandamme@lvandamme.fr";
        $u2->password = Hash::make("louannevandamme");
        $u2->save();

        $this->call([
            GoatSeeder::class,
        ]);
    }
}
