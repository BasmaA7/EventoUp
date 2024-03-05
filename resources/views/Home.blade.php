@extends('layouts.mastar')
@section('content')
<section class="text-gray-600 body-font">

  <div class="bg-red-100 py-8 grid grid-cols-1 md:grid-cols-2">
      <!-- Left hero section-->
      <div class="flex flex-col justify-center p-4 py-10 md:p-10">
        <div>
            <h1 class="title-font sm:text-4xl mb-4 font-serif font-medium text-2xl lg:w-2/3">
               Evinto your best .</h1>
            <p class="lg:w-2/3">Explore and Elevate Your Space with Our Exquisite Plant Collection!</p>
        </div>
    
        <div class="mt-8 ">
            <form  class="flex">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="w-full">
                    <input type="text" name='q' class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" placeholder="Search Your Plants ..." required />
                </div>
                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-green-800 rounded-lg border border-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </div>
        
    </div>
    
      
      <!-- Right hero section-->
      <div class="md:ml-4">
          <img class="object-cover w-full h-full" src="https://www.larousse.fr/encyclopedie/data/images/1311972-Spectateurs_debout_lors_dun_concert.jpg"
              alt="">
      </div>
  </div>
</section>
@endsection