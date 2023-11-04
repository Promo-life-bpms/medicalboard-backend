@extends('layouts.app')

@section('title', 'Home')


@section('content')

    @include('components.nav') 
    <div class="w-full p-12">
        <h1 class="text-3xl font-bold">¡Hola {{ Auth::user()->name . ' ' . Auth::user()->lastname . '!' }}</h1>
        <div class="pt-12"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4 mt-4">
        
            <a href="{{ route('events.index') }}" class="max-w-xs rounded overflow-hidden shadow-lg rounded-lg transition-transform hover:scale-105 cursor-pointer">
                <img class="w-full object-cover" src="{{ asset('/img/eventos.jpg')}}" alt="Imagen 1" style="height: 200px;">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Eventos</div>
                </div>
            </a>

            <a href="{{ route('medicals.index') }}" class="max-w-xs rounded overflow-hidden shadow-lg rounded-lg transition-transform hover:scale-105 cursor-pointer">
                <img class="w-full object-cover" src="{{ asset('/img/medicos.jpg')}}" alt="Imagen 2" style="height: 200px;">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Médicos</div>
                </div>
            </a>
            
        </div>

    </div>
@endsection