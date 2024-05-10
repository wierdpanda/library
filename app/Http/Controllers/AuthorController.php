<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::paginate(7);

        session::put('authors_url', request()->fullUrl());

        return view('models.author.index', compact('authors'));

        // session::put('models.authors_url', request()->fullUrl());

        // return view('models.author.index', [
        //     'authors' => Author::paginate(5),
        // ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        // only use if have specific author request     $request
        /*  if no request then use

            Author::create([
                'name' => $request->input('name),
            ])
            
        */
        Author::create($request->validated());

        return redirect()->route('authors.index')->with('success', 'Author created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        

        return view('models.author.edit',[
            'author' => $author,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        if (session( key: 'authors_url')) {
            return redirect(session( key: 'authors_url'))->with('success', 'Author updated');
        }

        return redirect()->route('authors.index')->with('success', 'Author updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        $authors = Author::paginate(7);

        if (session(key: 'authors_url')) {
            // pages=8              example
            // explode sperates into 2 ( only works with 2 url parameters ) with 'pages=', session(key: 'books_url') creates pages as first part
            // and session(key: 'books_url') as second part use from array
            // [0] pulls from pages= [1] pulls from the 8
            
            $page = explode('page=', session(key: 'authors_url'))[1];
            // if statements in php does not end with ;
            if ($page>$authors->lastPage()){
                // cannot use function inside quotations hence $newPage vartiable is created and used instead
                $newPage= $authors->lastPage();
                // str_replace = search-replace-subject     subject would be the origional location 
                $newUrl= str_replace("page=$page", "page=$newPage", session(key: 'authors_url'));
                return redirect($newUrl)->with('success', 'Author Deleted');
            }
            return redirect(session(key: 'authors_url'))->with('success', 'Author Deleted');
        }


        // if (session( key: 'models.authors_url')) {
        //     return redirect(session( key: 'models.authors_url'))->with('success', 'Author Deleted');
        // }



        return redirect()->route('authors.index')->with('success', 'Author deleted.');
    }
}
