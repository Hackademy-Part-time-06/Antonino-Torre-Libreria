<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Models\Book;
use PhpParser\Node\Stmt\Foreach_;

class PageController extends Controller
{
    public function welcome(){
        
        return view('welcome');
    }

    public function index(){
        $books= Book::all();
        return view('book.index', ['books'=>$books]);
    }
    
    public function create(){
        return view('book.create');
    }
    
    public function send(BookRequest $richiesta){
        $path_image= '';
        if($richiesta->hasFile('image') && $richiesta->file('image')->isValid()){
            $path_name = $richiesta->file('image')->getClientOriginalName();
            $path_image= $richiesta->file('image')->storeAs('public/images',$path_name);
        }
        
        Book::create([
            'title'=>$richiesta->title,
            'pages'=>$richiesta->pages,
            'author'=>$richiesta->author,
            'year'=>$richiesta->year,
            'image'=>$path_image,
        ]);
        return redirect()->route('book.index')->with('success','Creazione avvenuta con successo');
    }
    
    public function show(Book $libro){
        
        return view('book.show', compact('libro'));
    }
}
