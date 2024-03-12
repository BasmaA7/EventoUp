


@extends('layouts.dashboard')
@section('content')
<h1>  Events  </h1>
 
  <div class="overflow-x-auto">
    <div class="inline-block  px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-purple-500 hover:shadow-soft-2xl hover:scale-102">
      <a href="{{route('event.create')}}" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded-full inline-block">Add +</a>
    </div>
</div>
               


             
<div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
  <table class="w-full table-fixed">
                      
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Title</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Description</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Date</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">image</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Location</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Evant Satus</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                          @foreach ($events as $event)
                              <tr>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->title}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200 truncate">{{$event->description}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->date}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                    @if ($event->image)
                                        <img src="{{ asset('storage/' . $event->image) }}" alt="Image for event" class="w-20 h-20">
                                    @else
                                        No Image
                                    @endif
                                </td>  
                                <td class="py-4 px-6 border-b border-gray-200">{{$event->location}}</td>
                              
                                  <td class="py-4 px-6 border-b border-gray-200">
                                      <span class="bg-green-500  py-1 px-2 rounded-full text-xs">{{$event->status}}</span>
                                  </td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                    <div class="flex flex-row gap-4">
                                      
                                      <a class="inline-block  px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25
                                       leading-pro bg-gradient-to-tl from-purple-700 to-purple-500 hover:shadow-soft-2xl hover:scale-102" href="{{ route('event.edit', $event->id) }}">Edit</a>
                                      <span >
                                      
                                        <form action="{{ route('destroy', $event) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="inline-block w-full px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102"   type="submit" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                      </form>
                                    </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 border-b border-gray-200">
                                  <form action="{{ route('accept', $event->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-sm leading-normal text-lime-500 font-weight-bolder ">accept</button>
                                </form>
                                <form action="{{ route('refuse', $event->id) }}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <button type="submit" class="text-sm leading-normal text-red-600 font-weight-bolder">refuse</button>
                              </form>
                              </td>

                              </tr>
                          @endforeach
                      </tbody>
                      
                    </table>
                </div>
           
        
                 
        
              </div>
 <div>
<h1>  Tickets </h1>
 
  <div class="overflow-x-auto">
    <div class="inline-block  px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-purple-500 hover:shadow-soft-2xl hover:scale-102">
      <a href="{{route('event.create')}}" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded-full inline-block">Add +</a>
    </div>
</div>
               


             
<div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
  <table class="w-full table-fixed">
                      
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Title</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Description</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Date</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">image</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Location</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Evant Satus</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                          @foreach ($events as $event)
                              <tr>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->title}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200 truncate">{{$event->description}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->date}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                    @if ($event->image)
                                        <img src="{{ asset('storage/' . $event->image) }}" alt="Image for event" class="w-20 h-20">
                                    @else
                                        No Image
                                    @endif
                                </td>  
                                <td class="py-4 px-6 border-b border-gray-200">{{$event->location}}</td>
                              
                                  <td class="py-4 px-6 border-b border-gray-200">
                                      <span class="bg-green-500  py-1 px-2 rounded-full text-xs">{{$event->status}}</span>
                                  </td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                    <div class="flex flex-row gap-4">
                                      
                                      <a class="inline-block  px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25
                                       leading-pro bg-gradient-to-tl from-purple-700 to-purple-500 hover:shadow-soft-2xl hover:scale-102" href="{{ route('event.edit', $event->id) }}">Edit</a>
                                      <span >
                                      
                                        <form action="{{ route('destroy', $event) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="inline-block w-full px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102"   type="submit" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                      </form>
                                    </span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 border-b border-gray-200">
                                  <form action="{{ route('accept', $event->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-sm leading-normal text-lime-500 font-weight-bolder ">accept</button>
                                </form>
                                <form action="{{ route('refuse', $event->id) }}" method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <button type="submit" class="text-sm leading-normal text-red-600 font-weight-bolder">refuse</button>
                              </form>
                              </td>

                              </tr>
                          @endforeach
                      </tbody>
                      
                    </table>
                </div>
           
        
                 
        
              </div>
 <div>
@endsection