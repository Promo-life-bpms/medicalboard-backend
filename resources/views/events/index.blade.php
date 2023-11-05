@extends('layouts.app')

@section('title', 'Home')


@section('content')

    @include('components.nav') 
    <div class="w-full p-12 ">
        <div class="flex">
            <a href="{{ route('index')}}" >
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h1 class="text-3xl font-bold">Eventos disponibles</h1>
        </div>
       
        <div class="pt-12"></div>
        
        <table class="table-auto w-full">
            <thead class="bg-stone-100 h-12 border">
                <tr >
                    <th style="width: 5%;">#</th>
                    <th style="width: 20%;">Evento</th>
                    <th style="width: 20%;">Fecha</th>
                    <th style="width: 20%;">Invitados</th>
                    <th style="width: 15%;">Status</th>
                    <th style="width: 20%;">Opciones</th>
                </tr>
            </thead>
            <tbody>

            @foreach($events as $event)
                <tr class="text-center border h-14">
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $event->name }}</td>
                    <td><b>Inicio: </b> {{ $event->start }}  <br> <b>Fin: </b> {{ $event->end }}</td>
                    <td>{{ count(json_decode($event->invited->users)) }}</td>
                    <td>

                        @if($todayFormat >=  date('Y-m-d', strtotime($events[0]->start))   && $todayFormat <= date('Y-m-d', strtotime($events[0]->end)) )
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">En curso</span>
                            
                        @elseif($todayFormat >  date('Y-m-d', strtotime($events[0]->start))   && $todayFormat > date('Y-m-d', strtotime($events[0]->end)) )
                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Finalizado</span>
                        @else
                            <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Próximo</span>
                        @endif
                    
                    </td>
                    <td>
                    <a href="{{ route('events.show', ['id' => $event->id]) }}" class="bg-pink-600 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Ver detalles de evento</a>

                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $events->links() }}
    </div>
@endsection

