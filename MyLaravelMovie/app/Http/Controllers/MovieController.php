<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use App\Movie;

class MovieController extends Controller
{
    public function movie() {

        $movies = Movie::all();

        return view('pages.home', compact('movies'));
    }
    public function show($id) {

        $movie = Movie::findOrFail($id);

        return view('pages.show', compact('movie'));
    }

    public function create() {


        return view('pages.create');
    }
    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);

        return redirect() -> route('show', $movie -> id);
    }

    public function edit($id) {

        $movie = Movie::findOrFail($id);

        return view('pages.edit', compact('movie'));
    }
    public function update(Request $request, $id) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::findOrFail($id);

        $movie -> update($data);

        return redirect() -> route('show', $movie -> id);
    }

    public function delete($id) {

        $movie = Movie::findOrFail($id);

        $movie -> delete();

        return redirect() -> route('home', $movie -> id);
    }

    public function visible(Request $request, $id) {

        $movie = Movie::findOrFail($id);

        if($movie) { 

            $movie['visible'] = false;

            $movie -> update();
        }

        return redirect() -> route('home', $movie -> id);
    }
}
