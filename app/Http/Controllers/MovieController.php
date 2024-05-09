<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MovieController extends Controller
{

    public function index(Request $request): View
    {        
    
        $movies = Movie::paginate();

        return view('movie.index', compact('movies'))
           ->with('i', ($request->input('page', 1) - 1) * $movies->perPage());
    }

   
    public function create(): View
    {
        $movie = new Movie();

        return view('movie.create', compact('movie'));
    }


    public function store(MovieRequest $request): RedirectResponse
    
    {
        Movie::create($request->validated());

        return Redirect::route('movies.index')
            ->with('success', 'Pelicula registrada con exito.');
    }


    public function show($id): View
    {
        $movie = Movie::find($id);
        return view('movie.show', compact('movie'));
    }


    public function edit($id): View
    {
        $movie = Movie::find($id);

        return view('movie.edit', compact('movie'));
    }


    public function update(MovieRequest $request, Movie $movie): RedirectResponse
    {
        $movie->update($request->validated());

        return Redirect::route('movies.index')
            ->with('success', 'Movie updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Movie::find($id)->delete();

        return Redirect::route('movies.index')
            ->with('success', 'Pelicula eliminada');
    }

    public function buscar(Request $request)
    {
	$buscar = Movie::all();
        $buscar = $request->get('buscar');
        $movies = Movie::firstOrNew()->where('nombre', 'like', '%'.$buscar.'%')->paginate(20);

        return view('movie.index',compact('movies'));
    }
}





