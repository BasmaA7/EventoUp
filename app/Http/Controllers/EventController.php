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
        $userId=Auth::id();
        $categories= Category::all();
        $events = Event::all();
        $date = Carbon::parse($request->input('date'))->format('Y-m-d');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('events', 'public');
        } else {
            $imagePath = null;
        }
        $event= Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath ,
            'user_id' => $userId,
            'category_id' => $request->input('category_id'),
            'quantity' => $request->input('quantity'),
            'date' => $date,
            'location' => $request->input('location'),
           'validation'=>$request->input('validation'),

        ]);
         // associate the event with the user, you can use:
    // $user = Auth::user();
    // $user->events()->save($event);
        return view('event', compact('categories','date','events'));

    
    }
    public function edit(Event $event){
        $categories = Category::all();
        return view('Organisateur.Evenements.edit',compact('categories','event'));
    }
    public function update(UpdateEventRequest $request,Event $event){
        $userId=Auth::id();

        $date = Carbon::parse($request->input('date'))->format('Y-m-d');
        $event->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $request->input('image'), 
            'user_id' => $userId,

            'category_id' => $request->input('category_id'),
            'quantity' => $request->input('quantity'),
            'date' => $date,
            'location' => $request->input('location'),
        ]);    return redirect()->route('dashboard')
                         ->with('seccess','Announcement update successfully');

    }
   

    public function show(Event $event)
    {
        $events = Event::where('status', 'accepted')->paginate(6);
        return view('allevents', compact('events'));
    }
public function destroy(Event $event)
{
    $event->delete();

    return redirect()->route('event')->with('success', 'Event deleted successfully');
}


// public function showDashboard()
// {
//     $events = Event::all(); 
//     $reservations = Reservation::all();
//     return view('dashboard.index', compact('events', 'reservations'));
// }

public function accept(Event $Event)
    {
        Event::where('id',$Event->id)->update(['status'=>'accepted']);
        return redirect(route('event'));

    }
    public function refuse(Event $Event)
    {
        Event::where('id',$Event->id)->update(['status'=>'refused']);
        return redirect(route('dashboard'));

    }

  
public function ShowEvents($id)
{
    $categories=Category::all();
    $event = Event::findOrFail($id);

    return view('showevent', compact('event','categories'));
}
}
