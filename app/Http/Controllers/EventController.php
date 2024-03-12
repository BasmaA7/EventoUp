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

    $events = Event::where('user_id',Auth::id())->paginate(10); 
    return view('Organisateur.Evenements.index', compact('events'));


}

// public function index()
//     {

//         if (Auth::user()->hasRole('spectator')) {

//             $userId = Auth::id();
//             $events = Event::where('organizer_id', $userId)->get();
//         } else {

//             $categories = Categorie::all();
//             $events = Event::with('user', 'categorie')->where('status', 'pending')->paginate(6);

//         }
//         $categories = Categorie::all();
//         return view('dashboard', compact('events', 'categories'));
//     }
public function AdminDash(){
    
    $events = Event::all(); 
    $reservations = Reservation::all();
    return view('Admin.Evenements.eventAdmin', compact('events', 'reservations'));


}
public function create()
    {
        $categories= Category::all();

        return view('Organisateur.Evenements.create',compact('categories'));
    }
    
    public function store(CreateEventRequest $request){
        $userId=Auth::id();
        // $events = Event::all();
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
        
   
        return redirect()->route('my_event')->with('success','event created successfully');
    
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




public function accept(Event $Event)
    {
        Event::where('id',$Event->id)->update(['status'=>'accepted']);
        return redirect(route('my_event'));

    }
    public function refuse(Event $Event)
    {
        Event::where('id',$Event->id)->update(['status'=>'refused']);
        return redirect(route('my_event'));

    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $category = $request->input('category');
        $categories = Category::all();
        if($category){
                $events = Event::where('title', 'like', "%$q%")
                    ->orWhere("category_id", $category  )
                    ->latest()
                    ->paginate(5);
        }else{
            $events = Event::where('title', 'like', "%$q%")
            ->latest()
            ->paginate(5);
        }
       
    
        return view('home', compact('events', 'categories'));
    }


   
public function ShowEvents($id)
{
    $categories=Category::all();
    $event = Event::findOrFail($id);

    return view('showevent', compact('event','categories'));
}
}
