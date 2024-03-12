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
                    <li><a class="text-gray-600 hover:text-gray-800" href="">All Events</a></li>
                    {{-- @can('Manage_users')
                        <li><a class="text-gray-600 hover:text-gray-800" href="{{ route('categorie.index') }}">Categories</a></li>
                    @endcan --}}
                    <li><a class="text-gray-600 hover:text-gray-800" href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="relative group">
              <button class= "text-gray-600 group-hover:text-gray-800 focus:outline-none  focus:text-gray-800">
                  {{ Auth::user()->name }}
              </button>
              <ul class="absolute hidden space-y-2 bg-white rounded-md shadow-md top-10 right-0 z-10">
                  <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-200" href="{{ route('profile.edit') }}">Profile</a></li>
          
                  @can('Book_an_event')
                      <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-200" href="{{ route('event.create') }}">Organizer</a></li>
                  @endcan
          
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
          
        </div>
    </header>

   

