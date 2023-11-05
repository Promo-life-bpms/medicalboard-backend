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

<div class="flex justify-between relative">
    <div>
        <img src="{{ asset('/img/izquierda1.png')}}" alt="izquierda" class="imagen-izquierda1 absolute" style="width: 300px;">
        <img src="{{ asset('/img/izquierda2.png')}}" alt="izquierda" class="imagen-izquierda2 absolute" style="width: 240px;">
    </div>
    <div>
        <img src="{{ asset('/img/derecha2.png')}}" alt="derecha" class="imagen-derecha1 absolute right-0" style="width: 300px;">
        <img src="{{ asset('/img/derecha1.png')}}" alt="derecha" class="imagen-derecha2 absolute right-0" style="width: 270px;">
    </div>
</div>

<div class="w-full p-12 flex items-center justify-center">
    <div class="mx-auto relative" style="width: 280px;">
        <div class=" rounded-full ">
            <img src="{{ asset('/img/logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
        </div>
        <p class="text-2xl font-bold mt-4 text-center">{{ $user->medical->degree . ' ' .  $user->name . ' '. $user->lastname }}</p>
    </div>
</div>

<div class="w-full flex flex-col items-center justify-center">
    <a href="#" class="bg-black text-white py-2 rounded-lg text-2xl mt-4 text-center" style="width: 320px;">
        MEDICAL BOARD
    </a>
    <a href="{{route('medical.info', ['id' =>  $user->id] )}}" class="bg-black text-white py-2 rounded-lg text-2xl mt-4 text-center" style="width: 320px;">
        MI INFORMACIÓN
    </a>
    <a href="{{ route('medical.events', ['id' => $user->id ])}}" class="bg-black text-white py-2 rounded-lg text-2xl mt-4 text-center" style="width: 320px;">
        EVENTOS 
    </a>
  
</div>
    
@endsection