<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index', ['books' => Book::orderBy('title')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = \App\Models\Author::orderBy('lastname')->get();
        return view('books.create', ['authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:books,title|',
            'pages' => 'required',
            'description' => 'required',
            'author_id' => 'required',
        ]);
        $book = new Book();
        $book->fill($request->all());
        return $book->save() !== 1 ?
            redirect()->route('books.index')->with("status_success", "Book added!") :
            redirect()->route('books.index')->with("status_error", "Book was not added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $authors = \App\Models\Author::orderBy('lastname')->get();
        return view('books.edit', ['authors' => $authors, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title' => 'required|unique:books,title,' . $book->id . '|',
            'pages' => 'required',
            'description' => 'required',
            'author_id' => 'required',
        ]);
        $book->fill($request->all());
        return $book->save() !== 1 ?
            redirect()->route('books.index')->with("status_success", "Book updated!") :
            redirect()->route('books.index')->with("status_error", "Book was not updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with("status_success", "Book deleted!");
    }
}
