@extends('layouts.app')

@section('title', 'Home')


@section('content')

    @include('components.nav') 
    <div class="w-full p-12 flex">

        <div class="flex w-full">
            <a href="{{ route('index')}}">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>


            <div class="w-full"> 
                <div class="flex justify-between">
                
                    <h1 class="text-3xl font-bold"> Lista de administradores</h1>

                        <!-- Modal toggle -->
                        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Agregar médico
                        </button>
                        <!-- Main modal -->
                        <div id="static-modal"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <form class="bg-white rounded px-4 pt-6 pb-8 mb-4" action="{{ route('admin.store') }}" method="POST">
                                    @csrf

                                    <!-- Modal header -->
                                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Agregar médico
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class=" space-y-6 mt-4">
                                        <div class="flex">
                                            <div class="flex-1 mx-2">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                                    Nombre (s) <span class="text-red-500">*</span>
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Ingrese nombre(s)" name="name">
                                                @error('name')
                                                    <p class="text-red-500 text-xs italic">Este campo es requerido</p>
                                                @enderror

                                            </div>
                                            <div class="flex-1 mx-2">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                                                    Apellidos <span class="text-red-500">*</span>
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Ingrese apellidos" name="lastname">
                                                @error('lastname')
                                                    <p class="text-red-500 text-xs italic">Este campo es requerido</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="flex-1 mx-2">
                                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                                    Email <span class="text-red-500">*</span>
                                                </label>
                                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Ingrese email" name="email">
                                                @error('email')
                                                    <p class="text-red-500 text-xs italic">Este campo es requerido y debe ser email</p>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                    
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="flex items-center p-2 pt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="static-modal" type="submit" class="bg-pink-600 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Guardar</button>
                                    </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            
        </div>

    </div>
   
    <div class="w-full px-12 pt-8">
        
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Éxito</p>
                <p>Usuario agregado exitosamente</p>
            </div>
        @endif

        @if (session('update'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">Éxito</p>
                <p>Información de usuario ha sido actualizada exitosamente</p>
            </div>
        @endif

        @if (session('delete'))
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-4" role="alert">
                <p class="font-bold">Éxito</p>
                <p>Usuario eliminado exitosamente</p>
            </div>
        @endif

        <table class="table-auto w-full">
            <thead class="bg-stone-100 h-12 border">
                <tr >
                    <th style="width: 5%;">#</th>
                    <th style="width: 30%;">Nombre</th>
                    <th style="width: 30%;">Apellidos</th>
                    <th style="width: 25%;">Correo</th>
                    <th style="width: 10%;">Opciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="text-center border h-14">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }} </td>
                        <td>{{ $user->email }} </td>
                        <td> 

                            <div class="flex">
                                <button data-modal-target="modal{{$user->id}}" data-modal-toggle="modal{{$user->id}}" class="block text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 h-10" type="button">
                                Editar
                                </button>

                                <form method="POST" action="{{ route('admin.delete', ['user_id' => $user->id]) }}" class="form-delete">
                                    @csrf
                                    <button type="submit" class=" delete-button bg-red-600 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Eliminar</button>
                                </form>
                            </div>
                            <!-- Modal toggle -->
                            
                            <!-- Main modal -->
                            <div id="modal{{$user->id}}"  tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <form class="bg-white rounded px-4 pt-6 pb-8 mb-4" action="{{ route('admin.update',['user_id'=> $user->id]) }}" method="POST">
                                        @csrf

                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Agregar médico
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=" space-y-6 mt-4">
                                            <div class="flex">
                                                <div class="flex-1 mx-2">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="name">
                                                        Nombre (s) <span class="text-red-500">*</span>
                                                    </label>
                                                    
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Ingrese nombre(s)" name="name" value="{{ $user->name }}">
                                                    @error('name')
                                                        <p class="text-red-500 text-xs italic">Este campo es requerido</p>
                                                    @enderror

                                                </div>
                                                <div class="flex-1 mx-2">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="lastname">
                                                        Apellidos <span class="text-red-500">*</span>
                                                    </label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Ingrese apellidos" name="lastname" value="{{ $user->lastname }}">
                                                    @error('lastname')
                                                        <p class="text-red-500 text-xs italic">Este campo es requerido</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="flex">
                                                <div class="flex-1 mx-2">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2 text-left" for="email">
                                                        Email <span class="text-red-500">*</span>
                                                    </label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Ingrese email" name="email" value="{{ $user->email }}">
                                                    @error('email')
                                                        <p class="text-red-500 text-xs italic">Este campo es requerido y debe ser email</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-2 pt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                            <button data-modal-hide="static-modal" type="submit" class="bg-pink-600 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 ease-in-out">Actualizar</button>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-10 pb-20">
            {{ $users->links() }}
        </div>
            
    </div> 

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    console.log('aaaaaaaaaaaa')
    $('.form-delete').submit(function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡El registro se eliminará permanentemente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        });
    });
</script>
@endsection