@extends('layouts.app')

@section('title', 'Home')


@section('content')

<div class="flex justify-between relative">
    
    <div class="w-full p-12 flex items-center justify-center">
        <div class="mx-auto relative" style="width: 280px;">
            <div class=" rounded-full ">
                <img src="{{ asset('/img/logo.png')}}" alt="Tu Imagen" class="w-full h-full object-cover" style="width: 280px; height:280px;">
            </div>
            <p class="text-2xl font-bold mt-4 text-center">{{ $user->medical->degree . ' ' .  $user->name . ' '. $user->lastname }}</p>
        </div>
    </div>
</div>
    
@endsection