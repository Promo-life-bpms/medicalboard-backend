<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="flex">
        <a href="{{ route('events.index')}}">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
        <h1 class="text-3xl font-bold">{{ $event->name}}</h1>
    </div>

    <div class="flex space-x-4 p-4">
        <div class="bg-white rounded-lg shadow-md p-4 h-28 w-1/6">
            <h2 class="text-lg font-semibold text-center">Total invitados</h2>
            <p class="text-5xl text-center" style="color:#0061a9;">{{count(json_decode($event->invited->users))}}</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
            <h2 class="text-lg font-semibold text-center">Asistieron</h2>
            @if($userCheckin)
                <p class="text-5xl text-center" style="color:#009975;">{{ count($userCheckin)}}</p>
            @else
                <p class="text-5xl text-center" style="color:#009975;">0</p>
            @endif
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
            <h2 class="text-lg font-semibold text-center">No Asistieron</h2>
            @if($userNoCheckin)
                <p class="text-5xl text-center" style="color:#cd3349;">{{ count($userNoCheckin)}}</p>
            @else
                <p class="text-5xl text-center" style="color:#cd3349;">0</p>
            @endif
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-4 w-1/6">
            <h2 class="text-lg font-semibold text-center">No invitados</h2>
            @if($usersNoInvited)
                <p class="text-5xl text-center" style="color:#eab756;">{{ count($usersNoInvited) }}</p>
            @else
                <p class="text-5xl text-center" style="color:#eab756;">0</p>
            @endif
        </div>
    </div>


    <div class="flex justify-between">
        <p class="pt-4  text-xl font-bold ">Lista de asistentes</p>
        <!-- Modal toggle -->
        
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            Agregar usuario
        </button>
        
        <!-- Main modal -->
        <div  wire:ignore id="static-modal"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Agregar invitado
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
                        <form method="POST" action="{{ route('user.event') }}">
                            @csrf
                            <div class="grid gap-4 mb-4 md:grid-cols-1">
                                <div>
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                    <label for="created_by" style="display: none;">Usuario:</label><p style="display: none;">{{ $user->id }}</p>
                                </div>

                                <div>
                                    <label for="usuarios">Usuarios ya invitados:</label>
                                    @foreach($nombres as $index => $nombre)
                                        <p>{{ $nombre }}</p>
                                    @endforeach   
                                </div>

                                <label for="users">Selecciona un usuario</label>

                                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Usuarios<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
                                </button>
                                
                                <!-- Dropdown menu -->
                                <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                                    <div class="p-3">
                                        <label for="input-group-search" class="sr-only">Search</label>
                                        
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                                </svg>
                                            </div>
                                            
                                            <input type="text" id="input-group-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search user">
                                        </div>
                                    </div>
                                    
                                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                                        @foreach($usuariosFiltrados as $usuario)
                                            <li>
                                                <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                    <input name="users[]" type="checkbox" value="{{ $usuario->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-{{ $usuario->id }}" class="w-full ml-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{$usuario->name.' '.$usuario->lastname}}</label>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">
                                        Agregar invitados
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div wire:poll.1000ms="updateLogs">
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
                @foreach ($logs as $log)
                    <tr class="border">
                        <th class="p-2">{{ $loop->iteration }}</th>
                        <th>
                            @if ($log->user && $log->user->medical)
                                {{ $log->user->medical->degree }} {{ $log->user->name }} {{ $log->user->lastname }}
                            @else
                                Datos médicos no disponibles
                            @endif
                        </th>
                        <th>{{ $log->created_at }}</th>
                        <th>
                            @if ($log->status == 1)
                                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Invitado</span>
                            @else
                                <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">No invitado</span>
                            @endif
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <p class="pt-8 pb-4 text-xl font-bold">Lista de invitados que no asistieron</p>
        <table class="table-auto w-full mt-4">
            <thead class="bg-stone-100 h-12 border">
                <tr>
                    <th style="width: 10%;">#</th>
                    <th style="width: 70%;">Nombre</th>
                    <th style="width: 20%;">Status</th>
                </tr>
            </thead>
            
            <tbody class="text-center">
                @foreach($userNoCheckin as $index => $nombre)
                    <tr class="border">
                        <td class="p-2">{{ $index + 1 }}</td>
                        
                        <td>
                            @if ($nombre && $nombre->medical)
                                {{$nombre->medical->degree}} {{$nombre->name}} {{ $nombre->lastname }}
                            @else
                                Datos médicos no disponibles
                            @endif
                        </td>
                        <td>
                            <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">No asistió / pendiente</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@livewireScripts
@section('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.hook('message.sent', (message, component) => {
                if (message.updateQueue.some(update => update.name === 'loadData')) {
                    Livewire.emit('loadData');
                }
            });
        });
    </script>
@endsection



