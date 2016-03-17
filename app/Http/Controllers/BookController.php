<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Book $book
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookRequest|Request $request
     * @param Book $book
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
