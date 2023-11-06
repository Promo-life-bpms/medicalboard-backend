@extends('layouts.app')

@section('title', 'Home')


@section('content')
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @elseif (session('message1'))
                <div class="alert alert-danger">
                    {{ session('message1') }}
                </div>
            @elseif (session('message2'))
                <div class="alert alert-warning">
                    {{ session('message2') }}
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
                                            Static modal
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="created_by">Usuario: </label> <p>{{ $user->id }}</p>
                                                    <label for="name" class="required">Título:</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Ingresa un título">
                                                    @error('name')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description" class="required">Descripción:</label>
                                                    <input type="text" name="description" class="form-control" placeholder="Ingresa la descripción">
                                                    @error('description')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="site" class="required">Sitio:</label>
                                                    <input type="text" name="site" class="form-control" placeholder="Ingresa el sitio">
                                                    @error('site')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="location" class="required">Locación:</label>
                                                    <input type="text" name="location" class="form-control" placeholder="Ingresa la locación">
                                                    @error('location')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="type" class="required">Tipo:</label>
                                                    <input type="text" name="type" class="form-control" placeholder="Tipo">
                                                    @error('type')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="start" class="required">Inicio:</label>
                                                    <input type="datetime-local" name="start" class="form-control" placeholder="Fecha">
                                                    @error('start')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="end" class="required">Fin</label>
                                                    <input type="datetime-local" name="end" class="form-control" placeholder="Fecha">
                                                    @error('end')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="url" class="required">URL:</label>
                                                    <input type="text" name="url" class="form-control" placeholder="Ingresa la URL">
                                                    @error('url')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="more_information" class="required">Más información:</label>
                                                    <input type="text" name="more_information" class="form-control" placeholder="Más información">
                                                    @error('more_information')
                                                        <small>
                                                            <font color="red"> *Este campo es requerido* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="img" class="required">Imagen:</label>
                                                    <input type="file" name="img" accept="image/*" class="form-control" placeholder="Seleccionar imagen">
                                                    @error('img')
                                                        <small>
                                                            <font color="red"> *Error al cargar la imagen* </font>
                                                        </small>
                                                        <br>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Crear Evento
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
                <tr class="text-center border h-14">
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $event->name }}</td>
                    <td><b>Inicio: </b> {{ $event->start }}  <br> <b>Fin: </b> {{ $event->end }}</td>
                    {{-- <td>{{ count(json_decode($event->invited->users)) }}</td> --}}
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
                    <td>
    <!-- Botón para abrir el modal -->
    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out" data-bs-toggle="modal" data-bs-target="#modalEditar{{$event->id}}">
        Editar
    </button>

    <!-- Modal de edición -->
    <div class="modal" id="modalEditar{{$event->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h5 class="modal-title">Editar Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Cuerpo del modal: Aquí puedes colocar el formulario para editar el evento -->
                <div class="modal-body">
                    <!-- Coloca aquí los campos para editar el evento -->
                    <!-- Puedes usar un formulario similar al de creación de eventos -->
                    <div>{{$event->id}}</div>
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
@endsection

