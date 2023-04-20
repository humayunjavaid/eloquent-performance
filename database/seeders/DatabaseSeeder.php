<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Book::factory(20)->create();

        User::factory(50)->create();

        Author::factory(50)->create();

        $books = Book::all();

        $users = User::all();

        User::all()->each(function ($user) use ($books) {
            $user->books()->attach(
                $books->random(rand(1, 3))->pluck('id')->toArray()
            );
        });


        User::all()->each(function ($user) use ($users) {
            $user->friends()->attach(
                $users->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

        Author::all()->each(function ($author) use ($books) {
            $author->books()->attach(
                $books->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}
