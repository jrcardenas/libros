@extends('base')

@section('main')

<x-guest-layout>
  <x-auth-card>
    <x-slot name="logo">
      <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-600" />
      </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <h1 class=' font-bold grid justify-items-center text-4xl'>Editar libro</h1>

    <br>

    <form method="POST" action="/libros/{{$libro->id}}">
      
      @csrf
      <input type="hidden" name="_method" value="PUT">

      @if(session('ok'))
      <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md" role="alert">
  <div class="flex">
    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
    <div>  
    {{session('ok')}}
      </div>
      </div>
    </div>
    <br>

      @endif
      <!-- ISBN -->
      <div>
    <x-label for="ISBN" :value="__('ISBN')" />

    <x-input id="ISBN" class="block mt-1 w-full" type="number" name="ISBN" value="{{$libro->ISBN}}" required autofocus />
  </div>
 

  <div>


  <!-- Titulo -->
  <div class="mt-4">
    <x-label for="titulo" :value="__('Titulo')" />

    <x-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" value="{{$libro->titulo}}" required />
  </div>

  <!-- Autor -->
  <div class="mt-4">
    <x-label for="autor" :value="__('Autor')" />

    <x-input id="autor" class="block mt-1 w-full" type="text" name="autor" value="{{$libro->autor}}" required/>
  </div>

  <!-- Año -->
  <div class="mt-4">
    <x-label for="anyo" :value="__('Fecha')" />

    <x-input id="anyo" class="block mt-1 w-full" type="date" name="anyo" value="{{$libro->anyo}}" />
  </div>

   <!-- Editorial -->
   <div class="mt-4">
    <x-label for="editorial" :value="__('Editorial')" />

    <x-input id="editorial" class="block mt-1 w-full" type="text" name="editorial" value="{{$libro->editorial}}"/>
  </div>

   <!-- Edicion -->
   <div class="mt-4">
    <x-label for="edicion" :value="__('Edicion')" />

    <x-input id="edicion" class="block mt-1 w-full" type="number" name="edicion" value="{{$libro->edicion}}" />
  </div>
  <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">

  <div class="flex items-center justify-end mt-4">
   

    <x-button class="ml-4">
      {{ __('Añadir') }}
    </x-button>
  </div>
</form>
</x-auth-card>
</x-guest-layout>

@endsection