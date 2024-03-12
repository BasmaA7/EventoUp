<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
       $categories=Category::all();
        $user = Auth::user();
    
        $reservations = Reservation::where('user_id', $user->id)->get();
        return view('tickets.ticket', ['reservations' => $reservations],compact('categories'));
    }
}
