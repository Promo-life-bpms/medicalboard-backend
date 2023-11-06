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

        <div class="flex justify-between">
           
            <p class="pt-4  text-xl font-bold ">Lista de asistentes</p>
            
            <!-- Modal toggle -->
            <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Agregar usuario
            </button>
            <!-- Main modal -->
            <div id="static-modal"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Static modal
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                            </p>
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-hide="static-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <table class="table-auto w-full mt-4" >
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
                        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">No asistió / pendiente</span>
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