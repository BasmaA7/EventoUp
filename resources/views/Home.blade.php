@extends('layouts.mastar')
@section('content')


<div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
  <div class="absolute inset-0">
    <img  src="https://www.larousse.fr/encyclopedie/data/images/1311972-Spectateurs_debout_lors_dun_concert.jpg" alt="Background Image" class="object-cover object-center w-full h-full" />
    <div class="absolute inset-0 bg-black opacity-50"></div>
  </div>
  
  <div class="relative   flex flex-col justify-center items-center h-full text-center">
    <h1 class="text-5xl font-bold leading-tight mb-4">Welcome to Evento  Website</h1>
    <p class="text-lg text-gray-300 mb-8">Discover amazing features and services that await you.</p>
    
    <a href="#" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Get Started</a>
  </div>
</div>

<form action="{{ route('search') }}" method="GET" class=" mt-8 max-w-lg mx-auto">
  <div class="flex items-center">
      <div class="relative">
        
        <select name="category" id="">
          @foreach ($categories as $category)
          <option value="">All Categories</option>

             <option value="{{$category->id}}">{{$category->title}}</option>
         @endforeach
       </select>
      </div>

      <div class="relative  w-full ml-2">
          <div class=" flex">
              <label for="simple-search" class="sr-only">Search</label>
              <div class="flex-1">
                  <input type="text" name="q" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" placeholder="Search ..." required />
              </div>
              <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-800 rounded-lg border border-blue-700 hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  </svg>
                  <span class="sr-only">Search</span>
              </button>
          </div>
      </div>
  </div>
</form>





<section class="text-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
    
  <x-alert />

      <div class="flex flex-wrap -m-4">
        @foreach ($events as $event)

        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img src="{{ asset('storage/' . $event->image) }}" alt="Image for event" class="object-cover object-center w-full  block">
            <div class="p-6">
              
                              
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY <span>{{$event->category->title}}</span></h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{$event->title}}</h1>
              <p class="leading-relaxed mb-3">{{$event->description}}</p>
              <form action="{{route('reserve',$event->id)}}" method="post" >
          @csrf
        @can('Book_an_event')
      <button    type="submit" class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Reserve</button>
      @endcan
</form>
              <div class="flex items-center flex-wrap">
                <a  href="{{route('showevent',$event->id)}}"   class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $events->links() }}
    </div>
  </section>
@endsection



