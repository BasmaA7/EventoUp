<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
  public function index() {
    $events = Event::latest()->paginate(5); 
    $categories = Category::all();
    



    foreach ($events as $event) {
        $event->reservations = $event->reservations()->where('status', 'en_attente')->get();
    }
    return view('dashboard', compact('categories', 'events'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}


public function create()
    {
        $categories= Category::all();

        return view('Organisateur.Evenements.create',compact('categories'));
    }
    
    public function store(CreateEventRequest $request){
        $categories= Category::all();
        $events = Event::all();
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');
        $event= Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'user_id' => $request->input('user_id'),
            'category_id' => $request->input('category_id'),
             'user_id' => Auth::id(),
            'status_id' => 1,
            'quantity' => $request->input('quantity'),
            'date' => $date,
            'location' => $request->input('location'),
           'validation'=>$request->input('validation'),

        ]);
        return view('dashboard', compact('categories','date','events'));

    
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
    public function show(Category $category)
    {
        $categories = Category::all();
        return view('Organisateur.Evenements.edit', compact('category','categories'));
    }
public function destroy(Event $event)
{
    $event->delete();

    return redirect()->route('home')->with('success', 'Event deleted successfully');
}


public function showDashboard()
{
    $events = Event::all(); 
    $reservations = Reservation::all();
    return view('events.index', compact('events', 'reservations'));
}
}
