<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(){
        $categories= Category::all();
        return view('Organisateur.Evenements.create',compact('categories'));
    }
    public function store(CreateEventRequest $request){
        $categories= Category::all();
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');

        $event= Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'user_id' => $request->input('user_id'),
            'category_id' => $request->input('category_id'),
            'status_id' => 1,
            'quantity' => $request->input('quantity'),
            'date' => $date,
            'location' => $request->input('location'),
           
        ]);
        return view('home', compact('date', 'event','categories'));

    
    }
    public function edit(){
        $categories= Category::all();

        return view('Organisateur.Evenements.edit');
    }
    public function update(){


    }
    public function destroy(){

    }
}
