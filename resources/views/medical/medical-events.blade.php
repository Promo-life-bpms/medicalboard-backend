@extends('layouts.app')

@section('title', 'Eventos')


@section('content')

<style>

    body{
        background-color: black !important;
    }

</style>

    <div class="flex justify-between relative p-20">
        <div class="flex">
            <a href="{{ url()->previous() }}">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h1 class="text-3xl font-bold text-white">Eventos</h1>
        </div>
    </div>

    <div class="px-20">

    @if((empty($past) || count($past) === 0) && (empty($present) || count($present) === 0) && (empty($futuro) || count($futuro) === 0))
    <p class="text-white">No tienes eventos disponibles</p>

    @else
        @if(!empty($past) && count($past) > 0)
            <div>
                <p class="text-2xl font-bold text-white">Finalizados</p>
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($past as $invited)
                        @php
                            $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                            $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                        @endphp
                    
                        @if ($eventStartDate->format('Y-m-d') < $today && $eventEndDate->format('Y-m-d') < $today )
                            <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">
                                <div class="bg-stone-800 rounded-lg overflow-hidden shadow-lg text-white">
                                    @if($invited->events->img == '' ||  $invited->events->img == null)
                                        <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @else
                                        <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @endif
                                
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold text-white">{{ $invited->events->name }}</h2>
                                    </div>
                                </div>
                            </a> 
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    
        
        @if(!empty($present) && count($present) > 0)
            <div class="mt-10">
                <p class="text-2xl font-bold text-white">En curso</p>
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
                    @foreach($present as $invited)

                        @php
                           $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                           $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                        @endphp
                        @if ($eventStartDate->format('Y-m-d') <= $today && $eventEndDate->format('Y-m-d') <= $today )
                            <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">
                                <div class="bg-stone-800 rounded-lg overflow-hidden shadow-lg text-white">
                                    @if($invited->events->img == '' ||  $invited->events->img == null)
                                        <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @else
                                        <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold text-white">{{ $invited->events->name }}</h2>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
        
        @if(!empty($futuro) && count($futuro) > 0)
            <div class="mt-10">
                <p class="text-2xl font-bold text-white">Próximos</p>
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 ">
                    @foreach($futuro as $invited)
                        @php
                            $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                            $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                        @endphp
                        
                        @if ($eventStartDate->format('Y-m-d') > $today && $eventEndDate->format('Y-m-d') > $today )
                            <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">
                                <div class="bg-stone-800 rounded-lg overflow-hidden shadow-lg text-white">
                                    @if($invited->events->img == '' ||  $invited->events->img == null)
                                        <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @else
                                        <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                                    @endif
                                    <div class="p-4">
                                        <h2 class="text-xl font-semibold">{{ $invited->events->name }}</h2>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endif
    </div>
@endsection