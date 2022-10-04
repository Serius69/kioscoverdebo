<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Latest;
use App\Models\User;
use App\Models\Project;
use App\Models\Photo;
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

        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@cni.bo',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@cni.bo',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@cni.bo',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Typelatest::factory(3)->create();
        Photo::factory(5)->create();
        foreach ($users as $key => $user) {
            User::create($user);
        }
        // User::factory(5)->create();
        Event::factory(5)->create();
        Latest::factory(5)->create();
        Project::factory(5)->create();
        Banner::factory(3)->create();
        Operator::factory(3)->create();


    }
}
