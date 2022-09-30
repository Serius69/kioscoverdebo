<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Latest;
use App\Models\User;
use App\Models\Project;
use App\Models\Photo;
use App\Models\Typeuser;
use App\Models\Banner;
use App\Models\Operator;
use App\Models\Typelatest;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Typeuser::factory(2)->create();
        Typelatest::factory(3)->create();
        Photo::factory(5)->create();
        User::factory(5)->create();
        Event::factory(5)->create();
        Latest::factory(5)->create();
        Project::factory(5)->create();
        Banner::factory(3)->create();
        Operator::factory(3)->create();


    }
}
