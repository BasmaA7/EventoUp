@extends('layouts.mastar')
@section('content')

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="#" src="{{ $event->image }}">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">"{{ $event->title }}"
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">{{ $event->description }}.</p>
      <p class="mb-8 leading-relaxed">{{ $event->price }}$</p>
      <p class="mb-8 leading-relaxed">{{ $event->quantity }}.</p>
      {{-- <p class="mb-8 leading-relaxed">"{{ $event->description }}".</p> --}}
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
      </div>
    </div>
  </div>
</section>
@endsection