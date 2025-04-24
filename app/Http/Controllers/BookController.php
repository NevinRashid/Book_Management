<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors=Author::all();
        $languages=Language::all();
        $categories=Category::all();
        return view('books.create',compact('authors','languages','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $validatedData=$request->validated();
        if ($request->hasFile('cover')) {
            $file=$request->file('cover');
            $path = UploadImage($file, "covers");
            $validatedData['cover'] = $path;
        }
        Book::create([
                        'title'       => $validatedData['title'],
                        'cover'       => $validatedData['cover'],
                        'published_at'=> $validatedData['published_at'],
                        'category_id' => $validatedData['category_id'],
                        'language_id' => $validatedData['language_id'],
                        'author_id'   => $validatedData['author_id'],
                    ]);
        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors=Author::all();
        $languages=Language::all();
        $categories=Category::all();
        return view('books.edit',compact('book','authors','languages','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book)
    {
        $validatedData=$request->validated();
        if ($request->hasFile('cover')) {
            $file=$request->file('cover');
            $path = UploadImage($file, "covers");
            $validatedData['cover'] = $path;
        }
        $book-> update([
                        'title'       => $validatedData['title'],
                        'cover'       => $validatedData['cover'],
                        'published_at'=> $validatedData['published_at'],
                        'category_id' => $validatedData['category_id'],
                        'language_id' => $validatedData['language_id'],
                        'author_id'   => $validatedData['author_id'],
                    ]);
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
