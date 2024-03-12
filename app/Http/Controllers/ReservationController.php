<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;




class ReservationController extends Controller
{

   

    public function index(){
       
        $reservation = Reservation::where([
            ['user_id', auth()->user()->id],
            ['status', 'en_attente']
        ])->get();
        return view('Organisateur.Evenements.ticketsManage',compact('reservation'));
    }
      


    public function acceptReservation(Reservation $reservation)
    {
        Reservation::where('id',$reservation->id)->update(['status'=>'acceptée']);
        return redirect(route('my_event'));

    }
    public function refuseReservation(Reservation $Reservation)
    {
        Reservation::where('id',$Reservation->id)->update(['status'=>'refused']);
        return redirect(route('my_event'));
    }





    public function reserve(Request $request, Event $event)
    {
        if (!Auth::check()) {
            return redirect()->route('register')->with("error", "You need to register or log in first.");
        }
    
        $user = auth()->user();
        $restPlaces = $event->quantity - Reservation::where("event_id", $event->id)->count();
    
        if ($restPlaces < 1) {
            return back()->with("error", "No more places in this event.");
        }
    
        if ($event->validation == "automatique") {
            $reservation = Reservation::create([
                "user_id" => $user->id,
                "event_id" => $event->id,
                "status" => "acceptée"
            ]);
    
            $event->decrement('quantity');
    
            return redirect()->route('tickets.ticket')->with("success", "Your reservation has been submitted successfully.");
        } else {
            $reservation = Reservation::create([
                "user_id" => $user->id,
                "event_id" => $event->id,
                "status" => "en_attente"
            ]);
    
            $event->decrement('quantity');
    
            return redirect()->route('tickets.ticket')->with("success", "Your reservation has been submitted successfully. Wait for the organizer to accept your reservation.");
        }
    }
    
}
