<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;

class CategoryController extends Controller
{
    public function index()
    {
        $events = Event::all(); 
       
        $categories = Category::all();
        return view('Admin.categories.create', compact('categories','events'));
    }

    public function create()
    {
        $categories= Category::all();

        return view('Admin.categories.create',compact('categories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $categories= Category::all();

        

        $categorie=Category::create([
            'title' => $request->input('title'),

        ]);
       

        return view('home',compact('categorie','categories'));

    }

    public function show(Category $category)
    {
        $categories = Category::all();
        return view('admin.categories.edit', compact('category','categories'));
    }

    public function edit(Category $category)
    {
        $categories = Category::all();

        return view('admin.categories.edit', compact('category','categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);

        $category->update($request->all());

        return redirect()->route('event.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->events()->delete();

        $category->delete();

        return redirect()->route('event.index')->with('success', 'Category deleted successfully');
    }
}
