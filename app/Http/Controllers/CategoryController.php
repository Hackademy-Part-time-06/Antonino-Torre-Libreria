<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::all();
        return view('category.index', ['categories'=>$categories]);
    } 
    
    public function create(){
        return view('category.create');
    }
    
    public function send(CategoryRequest $request){
        Category::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('category.index')->with('success','Categoria aggiunta correttamente');
    }
    
    public function show(Category $categoria){
        return view('category.show',compact('categoria'));
    }
    
}
