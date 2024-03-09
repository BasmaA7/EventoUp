<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
      
      $categories= Category::all();
      $events = Event::where('status', 'accepted')->paginate(6);
      return view('home',compact('categories','events'));
   }
}
