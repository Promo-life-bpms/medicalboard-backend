@extends('layouts.app')

@section('title', 'Home')


@section('content')
   

    @include('components.nav')
    
    <script>
   document.getElementById('tab1').style.display = 'block';
document.getElementById('tab2').style.display = 'none'; // Oculta tab2 inicialmente

document.getElementsByClassName('tablinks')[0].style.borderBottom = '2px solid blue';

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.borderBottom = "none";
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.style.borderBottom = "2px solid blue";
}

</script>
    <div class="w-full p-12 ">
        <div class="flex">
            <a href="{{ route('events.index')}}" >
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <h1 class="text-3xl font-bold">{{ $event->name}}</h1>
        </div>
        

        <div class="flex space-x-4 p-4">
            <div class="bg-white rounded-lg shadow-md p-4 h-28 w-1/6">
                <h2 class="text-lg font-semibold">Total invitados</h2>
                <p class="text-3xl">{{count(json_decode($event->invited->users))}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
                <h2 class="text-lg font-semibold">Asistieron</h2>
                <p class="text-3xl">{{ count($user_checkin)}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
                <h2 class="text-lg font-semibold">No Asistieron</h2>
                <p class="text-3xl">{{ count($user_no_checkin)}}</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
                <h2 class="text-lg font-semibold">No invitados</h2>
                <p class="text-3xl">{{ count($users_no_invited) }}</p>
            </div>
        </div>

        <div class="mt-5"></div>


        <table class="table-auto w-full" >
            <p class="pt-4 pb-4 text-xl font-bold">Lista de asistentes</p>
            <thead class="bg-stone-100 h-12 border">
                <tr >
                    <th style="width: 10%;">#</th>
                    <th style="width: 50%;">Nombre</th>
                    <th style="width: 20%;">Hora de entrada</th>
                    <th style="width: 20%;">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                <tr class="border">
                    <th class="p-2">{{$loop->iteration}}</th>
                    <th>{{ $log->user->medical->degree . ' ' . $log->user->name . ' ' . $log->user->lastname }}</th>
                    <th>{{ $log->created_at }}</th>
                    <th>@if($log->status == 1 )
                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Invitado</span>
                        @else
                            <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">No invitado</span>
                        @endif
                        
                    </th>
                </tr>
                @endforeach
           
            </tbody>
        </table>

        <div class="pagination-container text-right mt-10">
            {{ $logs->links() }}
        </div>



        <p class="pt-8 pb-4 text-xl font-bold">Lista de invitados que no asistieron</p>

        <table class="table-auto w-full" >
            <thead class="bg-stone-100 h-12 border">
                <tr >
                    <th style="width: 10%;">#</th>
                    <th style="width: 70%;">Nombre</th>
                   
                    <th style="width: 20%;">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users_no_invited as $log)
                <tr class="border">
                    <th class="p-2">{{$loop->iteration}}</th>
                    <th>{{ $log->user->medical->degree . ' ' . $log->user->name . ' ' . $log->user->lastname }}</th>
                    <th>
                        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">No asistió</span>
                    </th>
                </tr>
                @endforeach
           
            </tbody>
        </table>
    </div>

    <div class="mt-40"></div>
   
@endsection

@section('styles')
<style>
    
.tab {
    overflow: hidden;
}

.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

.tab button:hover {
    border-bottom: 2px solid blue; /* Cambia el color y el grosor del subrayado según tus preferencias */
}

.tabcontent {
    display: none;
}

/* Asegúrate de mostrar la pestaña activa por defecto */
#tab1 {
    display: block;
}
</style>
@endsection