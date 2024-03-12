@extends('layouts.mastar')
@section('content')

<div class="container">
  <h1 class="text-center text-orange-500 text-2xl font-bold mb-8">Tickets</h1>

    @if ($reservations->isEmpty())
    <div class="flex justify-center items-center ">
    <img src="https://dpteurope-18521.kxcdn.com/emipro_theme_base/static/src/img/product_slider/product-not-found.jpg" alt="">
            </div>
            <p class="text-center text-3xl text-red-500">Pas de réservation effectuée.</p>

    @else
        @foreach ($reservations as $key => $reservation)
            <a href="#" class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8 bg-cover " style="background-image: url('https://www.more.com/Site/images/icons/countries/herobanner.jpg');">
                <span class="absolute inset-x-0 bottom-0 h-2 "></span>
                <div class="flex flex-col items-center justify-center h-full">
                    <span class="text-orange-500 text-5xl font-bold ">Event Ticket</span>
                    <h3 class="text-lg font-bold t
                     sm:text-xl text-white ">{{ $reservation->event->titre }}</h3>
                    <p class="mt-1  font-bold  text-white"> <span class="text-2xl "> By {{ $reservation->event->user->name }}</span></p>
                </div>
                <div class="mt-4 flex justify-center">
                    <p class="text-pretty text-sm  text-white"> Event description : {{ $reservation->event->description }}</p>
                </div>
                <div class="mt-6 flex gap-4 sm:gap-6 justify-center">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-200">Published</dt>
                        <dd class="text-xs text-gray-100">{{ $reservation->event->created_at->format('d/m/Y') }}</dd>
                    </div>

                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-gray-200">Event time</dt>
                        <dd class="text-xs text-gray-100">{{ $reservation->event->date }} minutes</dd>
                    </div>
                </dl>                
              </div>
<div class="flex justify-end">
                @if ($reservation->status === 'en_attente')
                <div class="bg-white w-1/3 rounded-lg">
                    <div class=" text-red-500 py-2 ">  La réservation de  <span class="font-bold text-gray-800">"{{ $reservation->event->title }}"</span> est en attente de réponse.</div>
                  </div>
                @elseif ($reservation->status === 'acceptée')
                    <button class= "bg-red-500 hover:bg-blue-700  text-white font-bold py-2 px-4 rounded">
                        Télécharger
                    </button>
                @endif
              </div>
            </a>
            @if ($key < count($reservations) - 1)
                <div class="mt-8"></div>
            @endif
        @endforeach
    @endif
</div>
@endsection
