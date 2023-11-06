@extends('layouts.app')

@section('title', 'Detalles de evento')


@section('content')

<a href="{{ url()->previous() }}" class="absolute z-10 m-20 " >
    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a> 


<div class="w-full z-2">
    @if($event->img == '' ||  $event->img == null)
        <img src="{{ asset('img/eventos.jpg') }}" class="w-full h-48 object-cover">
    @else
        <img src="{{ asset($event->img) }}" class="w-full h-48 object-cover">
    @endif
</div>



<div class="relative px-20 pt-10">
    <p class="text-3xl font-bold text-center pb-5">{{ $event->name }}</p>
    <p class="pt-4 text-xl">{{ $event->description }}</p>
</div>
 
<div class="flex flex-wrap ">
    <div class="w-full md:w-1/2 px-20"> 
        <p class="text-xl font-bold mb-8">Detalles del evento</p>
        <div class="border border-stone-200 p-5 rounded-lg ">
            @php
                $eventStartDate = \Carbon\Carbon::parse($event->start);
                $eventEndDate = \Carbon\Carbon::parse($event->end);
            @endphp
           <p>Fecha:  {{ date('Y-m-d', strtotime($event->start)) }}</p>
           <p>Hora de inicio: {{ date('H:i', strtotime($event->start)) }} </p>
           <p>Hora de termino: {{ date('H:i', strtotime($event->end)) }}</p>
           <p>Tipo: {{ $event->type }}</p>
           <p>Sede: {{ $event->site }}</p>
           <p>Status: 
            @if($eventStartDate->format('Y-m-d') < $today && $eventEndDate->format('Y-m-d') < $today )
                <span class="mt-5 inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Finalizado</span>
            @elseif($eventStartDate->format('Y-m-d') <= $today && $eventEndDate->format('Y-m-d') <= $today )
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">En curso</span>
            @else 
                <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Próximo</span>
            @endif
        </p>
        </div>

        <p class="text-xl font-bold mb-8 mt-10">Recursos del evento</p>
        <div class="border border-stone-200 p-5 rounded-lg ">

            <a href="{{ $event->url}}" target="__blank">
                <div class="flex justify-between">
                    
                        <p>Obtener liga de evento</p>
                    
                    <svg width="50px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </a> 
          
         
        </div>
    </div> 
    <div class="w-full md:w-1/2 px-20">
        <p class="text-xl font-bold mb-8">Información adicional</p>
        <div class="border border-stone-200 p-5 rounded-lg">
            {{ $event->more_information}}
        </div>      
    </div>
</div>
@endsection