@extends('layouts.app')

@section('title', 'Home')


@section('content')

    @include('components.nav') 
    <div class="w-full p-12 flex">

        <div class="flex">
            <a href="{{ route('index')}}">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        
            <h1 class="text-3xl font-bold">Lista de medicos disponibles</h1>
        </div>
        
        <div class="pt-12"></div>
        

    </div>
@endsection