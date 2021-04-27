@extends('base')
@section('main')
<x-guest-layout>
  <x-auth-card>
  <x-slot name="logo">
  <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-600" />
      </a>

    </x-slot>

    @if (Route::has('login'))
      @auth

    <h1 class=' font-bold grid justify-items-center text-2xl'>
    Login correcto</h1>
    @endif

@endauth
    <h1 class=' font-bold grid justify-items-center text-xl'>
    Bienvenido a la libreria virtual
  
    @if (Route::has('login'))
      @auth

      {{ Auth::user()->name }}</h1>

  </h1>


    

   
    @endif

@endauth
    </x-auth-card>
</x-guest-layout>

    @endsection