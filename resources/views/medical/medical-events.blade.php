@extends('layouts.app')

@section('title', 'Eventos')


@section('content')

<div class="flex justify-between relative p-20">
    <div class="flex">
        <a href="{{ url()->previous() }}">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    
        <h1 class="text-3xl font-bold">Eventos</h1>
    </div>
</div>

<div class="px-20">
    @if(!empty($events_invited) && count($events_invited) > 0)
        
        <div>
            <p class="text-2xl font-bold">Finalizados</p>
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($events_invited as $invited)

                    @php
                        $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                        $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                    @endphp
                    @if ($eventStartDate->format('Y-m-d') < $today && $eventEndDate->format('Y-m-d') < $today )
                    <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">

                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            @if($invited->events->img == '' ||  $invited->events->img == null)
                                <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                            @else
                                <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                            @endif
                            <div class="p-4">
                                <h2 class="text-xl font-semibold">{{ $invited->events->name }}</h2>
                                <span class="mt-5 inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Finalizado</span>
                            </div>
                        </div>
                    </a>
                    
                    
                    @endif

                @endforeach
            </div>
        </div>

        <div class="mt-10">
            <p class="text-2xl font-bold">En curso</p>
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($events_invited as $invited)

                @php
                    $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                    $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                @endphp
                @if ($eventStartDate->format('Y-m-d') <= $today && $eventEndDate->format('Y-m-d') <= $today )
                <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">

                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        @if($invited->events->img == '' ||  $invited->events->img == null)
                            <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h2 class="text-xl font-semibold">{{ $invited->events->name }}</h2>
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">En curso</span>
                        </div>
                    </div>
                </a>

                @endif


                @endforeach
            </div>
        </div>

        <div class="mt-10">
            <p class="text-2xl font-bold ">Próximos</p>
            <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($events_invited as $invited)

                @php
                    $eventStartDate = \Carbon\Carbon::parse($invited->events->start);
                    $eventEndDate = \Carbon\Carbon::parse($invited->events->end);
                @endphp
                @if ($eventStartDate->format('Y-m-d') > $today && $eventEndDate->format('Y-m-d') > $today )
                <a href="{{ route('medical.event.detail', ['id' => $invited->events->id ])}}">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        @if($invited->events->img == '' ||  $invited->events->img == null)
                            <img src="{{ asset('img/eventos.jpg') }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                        @else
                            <img src="{{ $invited->events->img }}" alt="{{ $invited->events->name }}" class="w-full h-48 object-cover">
                        @endif
                        <div class="p-4">
                            <h2 class="text-xl font-semibold">{{ $invited->events->name }}</h2>
                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Próximo</span>
                        </div>
                    </div>
                </a>
                @endif


                @endforeach
            </div>
        </div>
     
    @else
        <p>No tienes eventos disponibles</p>
    @endif
</div>
 

@endsection