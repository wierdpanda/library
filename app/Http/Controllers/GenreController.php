<?php


namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Support\Facades\Session;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::paginate(7);

        session::put('genres_url', request()->fullUrl());

        return view('models.genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        Genre::create($request->validated());

       

        return redirect()->route('genres.index')->with('success', 'Genre created.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        return view('models.genre.edit',  compact('genre'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $genre->update($request->validated());

        if (session( key: 'genres_url')) {
            return redirect(session( key: 'genres_url'))->with('success', 'Genre updated');
        }

        return redirect()->route('genres.index')->with('success', 'Genre updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        $genres = Genre::paginate(7);

        if (session(key: 'genres_url')) {
            // pages=8              example
            // explode sperates into 2 ( only works with 2 url parameters ) with 'pages=', session(key: 'books_url') creates pages as first part
            // and session(key: 'books_url') as second part use from array
            // [0] pulls from pages= [1] pulls from the 8
            
            $page = explode('page=', session(key: 'genres_url'))[1];
            // if statements in php does not end with ;
            if ($page>$genres->lastPage()){
                // cannot use function inside quotations hence $newPage vartiable is created and used instead
                $newPage= $genres->lastPage();
                // str_replace = search-replace-subject     subject would be the origional location 
                $newUrl= str_replace("page=$page", "page=$newPage", session(key: 'genres_url'));
                return redirect($newUrl)->with('success', 'Genre Deleted');
            }
            return redirect(session(key: 'genres_url'))->with('success', 'Genre Deleted');
        }

        return redirect()->route('genres.index')->with('success', 'Genre deleted.');
    }
}
