<?php

namespace App\Http\Controllers;



use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(7);
        

        // session takes note of exact table page for update command. put  use Illuminate\Support\Facades\Session;  at top for inports
        session::put('books_url', request()->fullUrl());


        return view('models.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres  = \App\Models\Genre::orderBy('name')->get();
        $authors = \App\Models\Author::orderBy('name')->get();

        return view('models.book.create', compact('genres', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)

    {

        Book::create($request->validated());


        return redirect()->route('books.index')->with('success', 'Book created');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $genres  = \App\Models\Genre::orderBy('name')->get();
        $authors = \App\Models\Author::orderBy('name')->get();
        return view('models.book.edit', compact('book', 'genres', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update(($request->validated()));
        //the if below is to take back to teh last page (session) withing teh table you where on
        if (session(key: 'books_url')) {
            return redirect(session(key: 'books_url'))->with('success', 'Book updated');
        }

        return redirect()->route('books.index')->with('success', 'Book updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {

        $book->delete();
        $books = Book::paginate(7);


        //  the underscore for books_url is used for array variable unless company states otherwise

        if (session(key: 'books_url')) {
            // pages=8              example
            // explode sperates into 2 ( only works with 2 url parameters ) with 'pages=', session(key: 'books_url') creates pages as first part
            // and session(key: 'books_url') as second part use from array
            // [0] pulls from pages= [1] pulls from the 8
            
            $page = explode('page=', session(key: 'books_url'))[1];
            // if statements in php does not end with ;
            if ($page>$books->lastPage()){
                // cannot use function inside quotations hence $newPage vartiable is created and used instead
                $newPage= $books->lastPage();
                // str_replace = search-replace-subject     subject would be the origional location 
                $newUrl= str_replace("page=$page", "page=$newPage", session(key: 'books_url'));
                return redirect($newUrl)->with('success', 'Book Deleted');
            }
            return redirect(session(key: 'books_url'))->with('success', 'Book Deleted');
        }

        return redirect()->route('books.index')->with('success', 'Book updated');
    }
}
