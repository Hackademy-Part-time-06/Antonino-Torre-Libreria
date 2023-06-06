<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\AuthorRequest;
use App\Models\Category;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::all();
        return view('author.index',['authors'=>$authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request)
    {
        Author::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'birthday'=>$request->birthday,
        ]);
        return redirect()->route('author.index')->with('success', 'Autore Aggiunto correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        
        return view('author.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        dd($author);
        return view('author.edit', $author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author)
    {
        $author->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'birthday'=>$request->birthday,
        ]);
        return redirect()->route('author.index')->with('success', 'Autore Aggiunto correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
