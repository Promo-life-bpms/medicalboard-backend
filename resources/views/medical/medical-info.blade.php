@extends('layouts.app')

@section('title', 'Home')


@section('content')
<style>
    body{
        background-color: black !important;
    }
</style>
<div class="flex justify-between relative">
    
    <img src="{{ asset('/img/bg-medical.png')}}" alt="derecha" class="imagen-derecha1 absolute top-0 right-0 " style="width: 300px; z-index:4;">

    <div class="w-full pt-12 flex items-center justify-center bg-black">
        <div class="mx-auto relative" style="width: 280px;">
            <div class=" rounded-full ">
                <img src="{{ asset('/img/medical-logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
            </div>

            <p class="text-2xl font-bold mt-4 text-center text-white">{{ $user->medical->degree . ' ' .  $user->name . ' '. $user->lastname }}</p>
        </div>
    </div>

    {{-- <div class="w-full p-12 flex items-center justify-center">
        <div class="mx-auto relative" style="width: 280px;">
            <div class=" rounded-full ">
                <img src="{{ asset('/img/logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
            </div>
            <p class="text-2xl font-bold mt-4 text-center">{{ $user->medical->degree . ' ' .  $user->name . ' '. $user->lastname }}</p>
        </div>
    </div> --}}
</div>
    
@endsection