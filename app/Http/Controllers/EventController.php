<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index() {
        $events = Event::latest()->paginate(5); 
        $categories = Category::all();
        
        return view('dashboard', compact('categories', 'events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('home', compact('categories','date','event'));

    
    }
    public function edit(Event $event){
        $categories = Category::all();
        return view('Organisateur.Evenements.edit',compact('categories','event'));
    }
    public function update(UpdateEventRequest $request,Event $event){
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');
        $event->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'), 
            'user_id' => $request->input('user_id'),
            'category_id' => $request->input('category_id'),
            'status_id' => 1,
            'quantity' => $request->input('quantity'),
            'date' => $date,
            'location' => $request->input('location'),
        ]);    return redirect()->route('home')
                         ->with('seccess','Announcement update successfully');

    }
   
public function destroy(Event $event)
{
    $event->delete();

    return redirect()->route('home')->with('success', 'Event deleted successfully');
}
}
