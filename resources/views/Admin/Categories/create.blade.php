@extends('layouts.mastar')
@section('content')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
            <div class="bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">ADD Categories</h1>
             
                <div class="space-y-4">
                    <div class="mb-4">
                        <label for="title" class="text-lg font-serif">Title:</label>
                        <input type="text" placeholder="Title" name="title"
                            class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md w-full" />
                    </div>
                  
                  
                    <button type="submit"
                        class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-indigo-100 bg-indigo-600">ADD
                        </button>
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
