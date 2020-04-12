<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Event::class, 10)->create();

        $categories = \App\Category::all();

        App\Event::all()->each(function ($event) use ($categories) {
           $event->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
           );
        });
    }
}