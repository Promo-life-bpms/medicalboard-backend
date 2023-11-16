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

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="245" height="245" viewBox="0 0 245 215" fill="none">
        <path d="M177.684 7.20024e-05H67.3428C65.206 0.000508604 63.1073 0.563562 61.2583 1.63239C59.4093 2.70123 57.8756 4.23795 56.812 6.0875L1.64122 101.44C0.56752 103.285 0.00195312 105.38 0.00195313 107.514C0.00195312 109.647 0.56752 111.743 1.64122 113.588L56.812 208.94C57.8812 210.782 59.4169 212.312 61.2652 213.376C63.1135 214.439 65.2093 214.999 67.3428 215H177.684C179.818 214.999 181.914 214.439 183.762 213.376C185.611 212.312 187.146 210.782 188.215 208.94L243.386 113.588C244.449 111.739 245.008 109.645 245.008 107.514C245.008 105.382 244.449 103.288 243.386 101.44L188.215 6.0875C187.152 4.23795 185.618 2.70123 183.769 1.63239C181.92 0.563562 179.821 0.000508604 177.684 7.20024e-05Z" fill="url(#pattern0)"/>
        <defs>
            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <image xlink:href="{{ asset('img/admin.jpg') }}" width="1" height="1"/>
            </pattern>
        </defs>
    </svg>
    @if(!empty($events_invited) && count($events_invited) > 0)
        
        <div>
            <p class="text-2xl font-bold text-white">Finalizados</p>
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
                                <h2 class="text-xl font-semibold text-white">{{ $invited->events->name }}</h2>
                                <span class="mt-5 inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10 text-white">Finalizado</span>
                            </div>
                        </div>
                    </a>
                    
                    
                    @endif

                @endforeach
            </div>
        </div>

       
            
        <div class="mt-10">
            <p class="text-2xl font-bold text-white">En curso</p>
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
                            <h2 class="text-xl font-semibold text-white">{{ $invited->events->name }}</h2>
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">En curso</span>
                        </div>
                    </div>
                </a>

                @endif


                @endforeach
            </div>
        </div>

        <div class="mt-10">
            <p class="text-2xl font-bold text-white">Próximos</p>
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
        <p class="text-white">No tienes eventos disponibles</p>
    @endif
</div>
 

@endsection