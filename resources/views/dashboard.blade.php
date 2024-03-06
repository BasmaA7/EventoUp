{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    @extends('layouts.dashboard')
    @section('content')

        <div class="py-12">
            <div class="w-full px-6 py-6 mx-auto">
                <!-- row 1 -->
                <div class="flex flex-wrap -mx-3">
                    @if (Auth::user()->HasRole('spectator'))
                    <h1>hiiiiiiiiiiiiiiiiiiii</h1>
                    <!-- card1 -->
                  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                        {{-- <div class="flex flex-row -mx-3">
                          <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Money</p>
                              <h5 class="mb-0 font-bold">
                                $53,000
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                              </h5>
                            </div>
                          </div>
                          <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                              <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
        @endif
                  <!-- card2 -->
                  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                          <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Users</p>
                              <h5 class="mb-0 font-bold">
                                2,300
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+3%</span>
                              </h5>
                            </div>
                          </div>
                          <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                              <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <!-- card3 -->
                  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                          <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                              <p class="mb-0 font-sans text-sm font-semibold leading-normal">New Clients</p>
                              <h5 class="mb-0 font-bold">
                                +3,462
                                <span class="text-sm leading-normal text-red-600 font-weight-bolder">-2%</span>
                              </h5>
                            </div>
                          </div>
                          <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                              <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <!-- card4 -->
                  <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                        <div class="flex flex-row -mx-3">
                          <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Sales</p>
                              <h5 class="mb-0 font-bold">
                                $103,430
                                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+5%</span>
                              </h5>
                            </div>
                          </div>
                          <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                              <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <!-- cards row 2 -->
                <div class="flex flex-wrap mt-6 -mx-3">
                  <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto p-4">
                        <div class="flex flex-wrap -mx-3">
                          <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                            <div class="flex flex-col h-full">
                              <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                              <h5 class="font-bold">Soft UI Dashboard</h5>
                              <p class="mb-12">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                              <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                                Read More
                                <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                              </a>
                            </div>
                          </div>
                          <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                            <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                              <img src="./assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                              <div class="relative flex items-center justify-center h-full">
                                <img class="relative z-20 w-full pt-6" src="./assets/img/illustrations/rocket-white.png" alt="rocket" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
                      <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('./assets/img/ivancik.jpg')">
                        <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                        <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                          <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                          <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                          <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">
                            Read More
                            <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
              
        
                <!-- cards row 4 -->
        
                  <!-- ***********Table********* -->
    
               
 <div>
  <h1>  Organisateur  </h1>
 
  <div class="overflow-x-auto">
    <div class="bg-blue-500 hover:bg-blue-700 inline-block font-bold py-2 px-4 rounded-full cursor-pointer">
        <a href="" class="btn btn-primary">Add +</a>
    </div>
 </div>
               


             
                  <div class="shadow-lg rounded-lg overflow-hidden mx-4 md:mx-10">
                    <table class="w-full table-fixed">
                      
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Title</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Description</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Date</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Location</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Places</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Status</th>
                                <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                          @foreach ($events as $event)
                              <tr>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->title}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200 truncate">{{$event->description}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">{{$event->date}}</td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                      <span class="bg-green-500  py-1 px-2 rounded-full text-xs">Active</span>
                                  </td>
                                  <td class="py-4 px-6 border-b border-gray-200">
                                      <div class="flex flex-row">
                                          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>
                                          <button type="button" class="focus:outline-none  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>
                                      </div>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                      
                    </table>
                </div>
           
        
                 
        
              </div>
               
            
        </div>
    
    {{-- </x-app-layout> --}}
    @endsection
    