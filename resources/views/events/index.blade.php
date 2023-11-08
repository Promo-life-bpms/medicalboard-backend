@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @if(session('message'))
        <div id="alert-border-1" class="flex items-center p-4 mb-4 text-blue-800 border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ml-3 text-sm font-medium">
                {{ session('message') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-1" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @elseif (session('message2'))
            <div id="alert-border-4" class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ml-3 text-sm font-medium">
                    {{ session('message2') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-4" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @elseif (session('message1'))
            <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ml-3 text-sm font-medium">
                    {{ session('message1') }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
    @endif

    @include('components.nav') 
    <div class="w-full p-12 ">
        <div class="flex">
            <a href="{{ route('index')}}" >
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <div class="w-full"> 
                <div class="flex justify-between">
                    <h1 class="text-3xl font-bold"> Eventos disponibles</h1>
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Crear evento
                        </button>

                        <div id="static-modal"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Crear evento
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <!-- Dentro del Modal body -->
                                    <div class="p-6 space-y-6">
                                        <form method="POST" action="{{ route('events.create') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 md:grid-cols-1">
                                                <div>
                                                    <label for="created_by" style="display: none;">Usuario:</label><p style="display: none;">{{ $user->id }}</p>
                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                                                    <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa un título">
                                                    @error('name')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                                                    <textarea name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa una descripción"></textarea>
                                                    @error('description')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="site" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sitio</label>
                                                    <input type="text" name="site" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa un sitio">
                                                    @error('site')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Locación</label>
                                                    <input type="text" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa una locación">
                                                    @error('location')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
                                                    <input type="text" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el tipo">
                                                    @error('type')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div style="display: flex; gap: 20px;">
                                                    <div style="flex: 1;">
                                                        <label for="start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio</label>
                                                        <input type="datetime-local" name="start" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el inicio de la reunión">
                                                        @error('start')
                                                            <small>
                                                                <font color="red"> *Este campo es requerido* </font>
                                                            </small>
                                                            <br>
                                                        @enderror
                                                    </div>

                                                    <div style="flex: 1;">
                                                        <label for="end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin</label>
                                                        <input type="datetime-local" name="end" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el fin de la reunión">
                                                        @error('end')
                                                            <small>
                                                                <font color="red"> *Este campo es requerido* </font>
                                                            </small>
                                                            <br>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div>
                                                    <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                                                    <input type="text" name="url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa la URL">
                                                    @error('url')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="more_information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Más información</label>
                                                    <input type="text" name="more_information" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa más información">
                                                    @error('more_information')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

                                                <div>
                                                    <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
                                                    <input type="file" name="img" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    @error('img')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>

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
                                                        @foreach($usuarios as $usuario)
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
                                                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                        Crear evento
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <tr class="border h-14">
                                <td>
                                    <div class="text-center">
                                        {{$loop->iteration}}
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        {{ $event->name }}
                                    </div> 
                                </td>
                                <td>
                                    <div class="text-center">
                                        <b>Inicio: </b> {{ $event->start }}  <br> <b>Fin: </b> {{ $event->end }}
                                    </div>
                                </td>
                        
                                <td>
                                    <div class="text-center">
                                        {{ count(json_decode($event->invited->users)) }}
                                    </div> 
                                </td> 
            
                                <td>
                                    <div class="text-center">
                                        @if($todayFormat >=  date('Y-m-d', strtotime($events[0]->start))   && $todayFormat <= date('Y-m-d', strtotime($events[0]->end)) )
                                            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">En curso</span>
                                        @elseif($todayFormat >  date('Y-m-d', strtotime($events[0]->start))   && $todayFormat > date('Y-m-d', strtotime($events[0]->end)) )
                                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Finalizado</span>
                                        @else
                                            <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Próximo</span>
                                        @endif
                                    </div> 
                                </td>
                                <td><br>
                                    <div class="text-center">
                                        <a href="{{ route('events.show', ['id' => $event->id]) }}" class="bg-pink-600 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out" >Ver detalles de evento</a>
                                    </div>
                                    <br>
                                    @if($event->created_by == auth()->user()->id)
                                        <div class="flex">
                                            <button data-modal-target="static-modal" data-modal-toggle="modalEditar{{$event->id}}" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                                Editar
                                            </button>
                                            
                                            <button data-modal-target="delete-modal{{$event->id}}" data-modal-toggle="modalDelete{{$event->id}}" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-auto dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                                                Eliminar
                                            </button>
                                        </div>
                                    @endif
                                    
                                    <!-- Modal para confirmar eliminación -->
                                    <div id="modalDelete{{$event->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Contenido del modal -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Cabecera del modal -->
                                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Confirmar eliminación
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalDelete{{$event->id}}">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Cerrar modal</span>
                                                    </button>
                                                </div>
                                                
                                                <!-- Cuerpo del modal -->
                                                <div class="p-6 space-y-6; text-center">
                                                    <p>¿Estás seguro que deseas eliminar este evento?</p>
                                                    <form method="POST" action="{{ route('events.delete', ['event_id' => $event->id]) }}">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                            Confirmar eliminación
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        
                                    <!-- Main modal -->
                                    <div id="modalEditar{{$event->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Editar evento
                                                    </h3>
                                        
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalEditar{{$event->id}}">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                
                                                <!-- Modal body -->
                                                <div class="p-6 space-y-6">
                                                    <form method="POST" action="{{ route('events.edit') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="grid gap-4 mb-4 md:grid-cols-1">
                                                            <div>
                                                                <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                                <label for="created_by" style="display: none;">Usuario:</label><p style="display: none;">{{ $user->id }}</p>
                                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
                                                                <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$event->name}}" >
                                                                @error('name')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                                                                <input type="text" name="description" value="{{$event->description}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('description')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="site" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sitio</label>
                                                                <input type="text" name="site" value="{{$event->site}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('site')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Locación</label>
                                                                <input type="text" name="location" value="{{$event->location}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('location')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
                                                                <input type="text" name="type" value="{{$event->type}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('type')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div style="display: flex; gap: 20px;">
                                                                <div style="flex: 1;">
                                                                    <label for="start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Inicio</label>
                                                                    <input type="datetime-local" name="start" value="{{$event->start}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    @error('start')
                                                                        <small>
                                                                            <font color="red"> *Este campo es requerido* </font>
                                                                        </small>
                                                                        <br>
                                                                    @enderror
                                                                </div>

                                                                <div style="flex: 1;">
                                                                    <label for="end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fin</label>
                                                                    <input type="datetime-local" name="end" value="{{$event->end}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                    @error('end')
                                                                        <small>
                                                                            <font color="red"> *Este campo es requerido* </font>
                                                                        </small>
                                                                        <br>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div>
                                                                <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL</label>
                                                                <input type="text" name="url" value="{{$event->url}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('url')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="more_information" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Más información</label>
                                                                <input type="text" name="more_information" value="{{$event->more_information}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('more_information')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
                                                                <input type="file" name="img" value="{{$event->img}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                @error('img')
                                                                    <small>
                                                                        <font color="red"> *Este campo es requerido* </font>
                                                                    </small>
                                                                    <br>
                                                                @enderror
                                                            </div>

                                                            <div>
                                                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    Modificar evento
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
                {{ $events->links() }}
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form'); // Selecciona el formulario
                const usersCheckboxes = document.querySelectorAll('input[name="users[]"]'); // Selecciona todas las casillas de verificación de usuarios
                
                form.addEventListener('submit', function(event) {
                    const selectedUsers = Array.from(usersCheckboxes) // Convierte la lista de checkboxes en un array
                    .filter(checkbox => checkbox.checked) // Filtra solo los checkboxes seleccionados
                    .map(checkbox => checkbox.value); // Obtiene los valores de los checkboxes seleccionados
                    
                    // Agrega los usuarios seleccionados como un campo oculto al formulario
                    const usersField = document.createElement('input');
                    usersField.setAttribute('type', 'hidden');
                    usersField.setAttribute('name', 'users');
                    usersField.setAttribute('value', selectedUsers.join(',')); // Puedes ajustar el separador según tus necesidades
                    form.appendChild(usersField); // Agrega el campo oculto al formulario
                });
            });
        </script>
    @endsection
@endsection

