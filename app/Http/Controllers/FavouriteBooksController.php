<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteBooksController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        auth()->user()->load(['books' => function ($query) {
            $query->where('favourite', 1)->with('authors');
        }]);

        return view('dashboard' , ['user' => auth()->user()]);
    }


    public function friends()
    {
        auth()->user()->load(['friends.books' => function ($query) {
            $query->where('favourite', 1);
        }]);

        return view('friends' , ['user' => auth()->user()]);
    }
}
