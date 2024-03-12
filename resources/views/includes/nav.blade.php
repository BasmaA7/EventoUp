{{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="">
  <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-300 dark-mode:bg-gray-800">
    <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4  mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Evento</a>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ route('event.index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif                                         
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Create Event</a>
           
      </nav>
    </div>
  </div>
</div>
  </div> --}}

 

  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
      <title>Evento</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
  
      <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-JRLPSZv9J+Ssr1izFGAHgjOCVP4g/WjffoFLkFlO6vrDSS6LQ4NEnAMryKkYYFaGC5/F9EVudv/UdhhKIzeOUA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  </head>
  
  <body>
  
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top bg-white shadow-md w-full">
          <div class="container mx-auto py-4 flex justify-between items-center">
  
              <div class="logo">
                  <h1 class="text-light text-2xl"><a href="index.html">Evento</a></h1>
              </div>
  
              <nav id="navbar" class="navbar">
                  <ul class="flex space-x-4">
                      <li><a class="text-gray-600 hover:text-gray-800" href="">Home</a></li>
                      <li><a class="text-gray-600 hover:text-gray-800" href="#about">About Us</a></li>
                      @auth
                      
                      <li><a class="text-gray-600 hover:text-gray-800" href="{{route('my_event')}}">Dashboard</a></li>

                  @endauth
                      @auth
                      
                      <li><a class="text-gray-600 hover:text-gray-800" href="{{route('tickets.ticket')}}">My Tickets</a></li>

                  @endauth
                      {{-- @can('Manage_users')
                          <li><a class="text-gray-600 hover:text-gray-800" href="{{ route('categorie.index') }}">Categories</a></li>
                      @endcan --}}
                      <li><a class="text-gray-600 hover:text-gray-800" href="#contact">Contact</a></li>
                      @role('organizer')
                      <li><a class="text-gray-600 hover:text-gray-800" href="{{route('event.create')}}">Create Event</a></li>
                      @endrole
                  </ul>
                
              </nav>
              @guest
              <div>
                  <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">Login</a>
                  <span class="text-gray-600 mx-2">|</span>
                  <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800">Register</a>
              </div>
          @else
  
              <div class="relative group">
             
                <button class= "text-gray-600 group-hover:text-gray-800 focus:outline-none  focus:text-gray-800">
                    {{ Auth::user()->name }}
                </button>
                <ul class="absolute hidden space-y-2 bg-white rounded-md shadow-md top-10 right-0 z-10">
                    <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-200" href="{{ route('profile.edit') }}">Profile</a></li>
            
                   
                        <li>
                            <form class="block px-4 py-2 text-gray-700 hover:bg-gray-200" action="{{route("changeRole")}}" method="post">
                                @csrf

                                <button class="  cursor-pointer py-1 px-2 z-50  " >
                                    @role("spectator")
                                      mode orginaze

                                    @else 
                                      mode user
                                    @endrole
                                </button>
                            
                            </form>
                        </li>
                    
            
                    @can('Manage_users')
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-200" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-200" href="">Users</a></li>
                    @endcan
            
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full px-4 py-2 text-left text-gray-700 hover:bg-gray-200">
                                Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @endguest

          </div>
      </header>
  
     
  
  







  