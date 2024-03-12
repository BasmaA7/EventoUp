@extends('layouts.dashboard')
@section('content')
    <h1> Tiket </h1>

    <div class="overflow-x-auto">
        <div
            class="inline-block  px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-purple-500 hover:shadow-soft-2xl hover:scale-102">
            <a href="" class="bg-blue-500 hover:bg-blue-700  font-bold py-2 px-4 rounded-full inline-block">Add +</a>
        </div>
    </div>




    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <table class="w-full table-fixed">

            <thead>
                <tr class="bg-gray-100">
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Ticket Id</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">User name</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Date de revervation</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase"> Ticket Status</th>
                    <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($reservation as $res)
                    <tr>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $res->id }}</td>
                        <td class="py-4 px-6 border-b border-gray-200 truncate">{{ $res->user->name }}</td>
                        <td class="py-4 px-6 border-b border-gray-200">{{ $res->date }}</td>

                        <td class="py-4 px-6 border-b border-gray-200">
                                <span
                                    class="bg-green-500 text-white py-1 px-2 rounded-full text-xs">{{ $res->status }}</span>
                        </td>

                        <td class="py-4 px-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <form action="{{ route('acceptReservation', $res->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="text-sm leading-normal text-white bg-green-600 font-weight-bolder px-4 py-2 mr-2">Accept</button>
                                </form>

                                <form action="{{ route('refuseReservation', $res->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')

                                    <button type="submit"
                                        class="text-sm leading-normal text-white bg-red-600 font-weight-bolder px-4 py-2">Refuse</button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>




    </div>
    <div>









    </div>
@endsection
