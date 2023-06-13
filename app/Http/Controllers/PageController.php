<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;

class PageController extends Controller
{
    public function welcome(){
        
        return view('welcome');
    }

    public function index(){
        $books= Book::all();
        $users= User::all();
        return view('book.index', ['books'=>$books, 'users'=>$users]);
    }
    
    public function create(){
        $authors=Author::all();
        $categories=Category::all();
        $users=User::all();
        return view('book.create',compact('authors','categories','users'));
    }
    
    public function send(BookRequest $request){
        $path_image= '';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image= $request->file('image')->storeAs('public/images',$path_name);
        }
        
        $data=Book::create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'year'=>$request->year,
            'image'=>$path_image,
            'author_id'=> $request->author_id,
            'user_id'=> Auth::user()->id,
        ]);
        $data->categories()->attach($request->categories);
        return redirect()->route('book.index')->with('success','Creazione avvenuta con successo');
    }
    
    public function show(Book $libro){
        return view('book.show', compact('libro'));
    }

    public function edit(Book $libro){
        $categories=Category::all();
        $authors=Author::all();
        return view('book.edit', ['book'=> $libro], compact('categories','authors'));
    }

    public function update(BookRequest $request, Book $libro){
        $path_image= $libro->image;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image= $request->file('image')->storeAs('public/images',$path_name);
        }
        
        $libro->update([
            'title'=>$request->title,
            'author_id'=>$request->author_id,
            'pages'=>$request->pages,
            'year'=>$request->year,
            'image'=>$path_image,
        ]);
        $libro->categories()->detach();
        $libro->categories()->attach($request->categories);
        return redirect()->route('book.index')->with('success','Modifica avvenuta con successo');
    }

    public function destroy(Book $libro){
        $libro->categories()->detach(); 
        $libro->delete();
        return redirect()->route('book.index')->with('success','Libro eliminato');
    }

    public function user(User $user){
        
        return view('book.user',['user'=>$user]);
    }
}
