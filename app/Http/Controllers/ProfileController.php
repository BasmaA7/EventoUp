<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function reserve(Request $request,Event $event){
        $user = auth()->user();
        $restplaces =  $event->quantity - Reservation::where("event_id",$event->id)->get()->count();
      
        if($restplaces <1) return back()->with("error", " No More places in this Event ");
        // Assuming the relationship is one-to-many
        if($event->validation == "automatique"){
                $reservation = Reservation::create([
                            "user_id" => $user->id
                            ,
                            "event_id" => $event->id
                            ,
                            "status" => "acceptée"
                        ]);
            
            return back()->with("success", "your reservation  submited successfuly ");
        }else  {
            $reservation = Reservation::create([
            "user_id" => $user->id
            ,
            "event_id" => $event->id
            ,
            "status" => "en_attente"
        ]);
        return back()->with("success", "your reservation  submited successfuly whate the orginaier to accept  your reservation  ");

        }
        
       
    
    }
}
