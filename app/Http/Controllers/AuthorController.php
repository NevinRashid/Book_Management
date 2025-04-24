<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::all();
        return view('authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        $validatedData=$request->validated();
        Author::create([
                        'author_name'=> $validatedData['author_name'],
                        'birth_date'=> $validatedData['birth_date'],
                        'nationality'=> $validatedData['nationality'],
                        ]);
        return redirect()->route('authors.index')->with('success', 'Author created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit',compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author)
    {
        $validatedData=$request->validated();
        $author->update([
                        'author_name'=> $validatedData['author_name'],
                        'birth_date'=> $validatedData['birth_date'],
                        'nationality'=> $validatedData['nationality'],
                        ]);
        return redirect()->route('authors.index')->with('success', 'Author updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted successfully!');
    }
}
