@extends('layouts.app')

@section('title', 'Home')


@section('content')

<style>
    @media (max-width: 640px) {
        .imagen-izquierda1 {
            width: 130px !important; 
        }

        .imagen-izquierda2 {
            width: 100px !important;
        }

        .imagen-derecha1 {
            width: 130px !important; 
        }
        .imagen-derecha2 {
            width: 115px !important; 
        }

        
    }
</style>

<body class="bg-black"> 
    <div class="flex justify-between relative bg-black">
        <div>
            
        </div>
        <div>
            <img src="{{ asset('/img/bg-medical.png')}}" alt="derecha" class="imagen-derecha1 absolute right-0" style="width: 300px;">
        </div>
    </div>
    
    <div class="w-full p-12 flex items-center justify-center bg-black">
        <div class="mx-auto relative" style="width: 280px;">
            <div class=" rounded-full ">
                <img src="{{ asset('/img/medical-logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
            </div>
            <p class="text-2xl font-bold mt-4 text-center">{{ $user->medical->degree . ' ' .  $user->name . ' '. $user->lastname }}</p>
        </div>
    </div>
    
    <div class="w-full flex flex-col items-center justify-center bg-black">
       
        <a href="#">
            <div class="max-w-screen-md mx-auto flex p-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" class="z-5" style="width: 33%; margin-right: -15%;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="white" stroke-width="4" stroke-miterlimit="10"/>
                </svg>
                <img src="{{ asset('/img/medical-logo.png')}}" alt="derecha" class="z-10 abosulte " style="width: 20%; height:20% margin-left:60px;" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; margin-left: -15%;" class="-ml-40 z-5">
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#FDFDFD"/>
                </svg>
            </div>
        </a>
    
        


        <a href="{{route('medical.info', ['id' =>  $user->medical->tag] )}}" class="bg-black text-white py-2 rounded-lg text-2xl mt-4 text-center" style="width: 320px;">
            MI INFORMACIÓN
        </a>
        <a href="{{ route('medical.events', ['id' => $user->medical->tag ])}}" class="bg-black text-white py-2 rounded-lg text-2xl mt-4 text-center" style="width: 320px;">
            EVENTOS 
        </a>
      
    </div>

</body>

    
@endsection