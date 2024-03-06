<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index(){
        $categories= Category::all();
        return view('Organisateur.Evenements.create',compact('categories'));
    }
    public function store(Request $request){

        $event=Event::create($request->all());
        return view('home', compact('event'));

    
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
