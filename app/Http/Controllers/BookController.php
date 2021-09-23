<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Book;
use App\Models\Module;
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
        //$books = DB::table('books')->get();
        $books = Book::get();

        return view('books.index', ['rows' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
            VALIDATE FORM DATA FIRST
        */
        $module = Module::where('code',$request->module_id)->first(); 

        $bk = new Book;
        $bk->module_id = $module->id;
        $bk->title = $request->title;
        $bk->isbn = $request->isbn;
        $bk->edition = $request->edition;
        $bk->year_published = $request->year_published;
        $bk->author = $request->author;
        $bk->url = $request->url;
        $bk->available_in = $request->available_in;
        $bk->save();

        return redirect('books');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
