@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">

    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">
        About Us
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @foreach ($authors as $author)
            <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col items-center text-center">

                {{-- FOTO --}}
                <img 
                    src="{{ asset('images/' . $author['image']) }}" 
                    alt="Foto Author"
                    class="w-40 h-40 object-cover rounded-full mb-4 shadow-md"
                >

                {{-- NAMA --}}
                <h2 class="text-2xl font-bold text-gray-900 mb-1">
                    {{ $author['name'] }}
                </h2>

                {{-- NIM --}}
                <p class="text-gray-600 font-semibold mb-3">
                    NIM : {{ $author['nim'] }}
                </p>

                {{-- BIO --}}
                <p class="text-gray-700">
                    {{ $author['bio'] }}
                </p>

            </div>
        @endforeach

    </div>

</div>
@endsection
