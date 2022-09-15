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
        Photo::factory(50)->create();
        User::factory(50)->create();
        Event::factory(50)->create();
        Latest::factory(50)->create();
        Project::factory(50)->create();

    }
}
