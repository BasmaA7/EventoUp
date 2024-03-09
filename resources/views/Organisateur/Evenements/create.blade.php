@extends('layouts.mastar')
@section('content')
    <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
            <div class="bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD Event</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="space-y-4">
                    <div class="mb-4">
                        <label for="title" class="text-lg font-serif">Title:</label>
                        <input type="text" placeholder="Title" name="title"
                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" />
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-lg font-serif">Description:</label>
                        <textarea name="description" cols="20" rows="5" placeholder="Write here..."
                            class="w-full font-serif p-4 text-gray-600 bg-indigo-50 outline-none rounded-md"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="text-lg font-serif">Image:</label>
                        
                        <input type="file" name="image" accept="image/*
                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" />
                    </div>
                    <div class="mb-4">
                        <label for="user" class="text-lg font-serif">Validation</label>
                        <select name="validation">
                            <option value="manuelle">Validation manuelle</option>
                            <option value="automatique">Validation automatique</option>
                        </select>
                    </div>
 
                    <div class="mb-4">
                        <label for="category" class="text-lg font-serif">Category:</label>
                        <select class="form-control ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full"
                            name="category_id">
                            <option selected="selected">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="quantity" class="text-lg mt-8 font-serif">Quantity:</label>
                        <input name="quantity" type="text" placeholder="Quantity" name="quantity"
                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" />
                    </div>
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
                    <div class=" mt-20">
                        <lable class="text-lg font-serif">Choose Date</lable> <br>
                        <input name="date" class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full"
                       type="date" placeholder="Select a date">
                    </div>
                    <div class="mb-4">
                        <label for="title" class="text-lg font-serif">Location :</label>
                        <input type="text" placeholder="Title" name="location"
                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" />
                    </div>
                    <button type="submit"
                        class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">ADD
                        EVENT</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(".js-example-tags").select2({
            tags: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#datepicker", {
            // Configuration options for Flatpickr
            // You can customize the appearance and behavior here
        });
    </script>
@endsection
