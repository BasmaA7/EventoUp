<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatistiqueController extends Controller
{
   public function index(){

//Total events with  category
   $eventsByCategory = DB::table('events')
   ->join('categories', 'events.category_id', '=', 'categories.id')
   ->select('categories.title as category_title', DB::raw('count(*) as total'))
   ->groupBy('categories.title')
   ->get();
 //  Total  réservations with Event
     $reservationsPerEvent = DB::table('reservations')
    ->join('events', 'reservations.event_id', '=', 'events.id')
    ->select('events.title', DB::raw('count(*) as total'))
    ->groupBy('events.title')
    ->get();

 //  total de réservations with statut
     $reservationsByStatus = DB::table('reservations')
     ->select('status', DB::raw('count(*) as total'))
     ->groupBy('status')
     ->get();

 return view('statistiques.statistique', compact('eventsByCategory', 'reservationsPerEvent', 'reservationsByStatus'));
    


   }
}
