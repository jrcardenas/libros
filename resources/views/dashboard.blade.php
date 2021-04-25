@extends('base')
@section('main')
<x-guest-layout>
  <x-auth-card>
  <x-slot name="logo">
  <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-600" />
      </a>

    </x-slot>
    <h1 class=' font-bold grid justify-items-center text-4xl'>
    Login correcto</h1>

    </x-auth-card>
</x-guest-layout>

    @endsection