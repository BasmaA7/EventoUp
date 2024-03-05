<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index(){

    }
    public function store(Request $request){
        $event=Event::create($request->all());
        return redirect()->route('Organisateur.Evenements.index')->with('success', 'Event created successfully');
    
    }
    public function edit(){
        return view();
    }
    public function update(){

    }
    public function destroy(){

    }
}
