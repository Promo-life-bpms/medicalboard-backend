@extends('layouts.app')

@section('title', 'Home')


@section('content')

<style>
    body{
        background-color: black !important;  
    }
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
 
    <div class="w-full flex flex-col items-center justify-center bg-black">

        <img src="{{ asset('/img/bg-medical.png')}}" alt="derecha" class="imagen-derecha1 absolute top-0 right-0 " style="width: 300px; z-index:4;">

        <div class="w-full pt-12 flex items-center justify-center bg-black">
            <div class="mx-auto relative" style="width: 280px;">
                <div class=" rounded-full ">
                    <img src="{{ asset('/img/medical-logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
                </div>
            </div>
        </div>
       
        <a href="https://rbmedicalboard.com">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2 mt-12">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="white" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#FDFDFD"/>
                    
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">MEDICAL BOARD</text>
                </svg>
            </div>
        </a>

        <a href="{{route('medical.info', ['id' =>  $user->medical->tag] )}}">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="#B1B0AF" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#B1B0AF"/>
                    
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">MI INFORMACIÓN</text>
                </svg>
            </div>
        </a>


        <a href="{{ route('medical.events', ['id' => $user->medical->tag ])}}">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="#878584" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#878584"/>
                    
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">EVENTOS</text>
                </svg>
            </div>
        </a>


        <a href="https://enfashop.com.mx/">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="white" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#FDFDFD"/>
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">ENFASHOP</text>
                </svg>
            </div>
        </a>


        <a href="https://rb.saludiario.com/">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="#B1B0AF" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#B1B0AF"/>
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">SALUDIARIO</text>
                </svg>
            </div>
        </a>

        <a href="https://www.mpediatria.com.mx">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="#878584" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#878584"/>
                    
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">MPEDIATRÍA</text>
                </svg>
            </div>
        </a>

        <a href="https://espanol.medscape.com/">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="white" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#FDFDFD"/>
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">MEDSCAPE</text>
                </svg>
            </div>
        </a>

        <a href="https://pnce.org/">
            <div class="max-w-screen-md mx-auto flex px-12 pt-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202 175" fill="none" style="width: 33%; margin-right: 0%; z-index: 10; position: relative;">
                    <path d="M50.2262 174.533L0.534912 87.7765L50.2262 1.01968H149.639L199.34 87.7765L149.639 174.533H50.2262Z" stroke="#B1B0AF" stroke-width="4" stroke-miterlimit="10"  fill="black"/>
                    <!-- Calcula la posición x para centrar la imagen -->
                    <image href="{{ asset('/img/medical-logo.png')}}" alt="derecha" width="160" height="160 " x="15" y="10" transform="translate(-50%)" />
                
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 610 175" fill="none" style="width: 100%; z-index:4; margin-left: -15%;" class="-ml-40" >
                    <path d="M0.0405273 0L50.3732 87.7765L0.679616 174.802H533.544L610 87.4008L533.544 0H0.0405273Z" fill="#B1B0AF"/>
                    <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="black" font-size="36" font-family="Arial" style="font-weight: bold">PEDIATRIC NUTRITION</text>
                </svg>
            </div>
        </a>

        <div class="mb-20"></div>
      
    </div>
 
@endsection