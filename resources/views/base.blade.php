<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

<head>
  <meta charset='utf-8' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
  <title>Libros</title>

  <link href="{{ asset('css/app.css') }}" rel='stylesheet' type='text/css' />

</head>

<body>

  <div fixed class="fixed items-center justify-between flex bg-gray-600 w-full px-12 py-4 my-0 mx-auto shadow-2xl w-11/12">
  <div class=" text-2xl text-white font-semibold inline-flex items-center">
        <img src="https://seeklogo.com/images/T/tailwind-css-logo-5AD4175897-seeklogo.com.png" class="w-16 mr-4"
            alt="logo-img">
        <span>tailwindcss</span>
    </div>  
    <h1 class="text-center text-white text-2xl">Libros virtuales</h1>
  <div  class="flex text-white">

      @if (Route::has('login'))
      @auth
   
      <a href="{{ route('libros.create') }}"class="ml-3 px-2 py-2 hover:text-green-300">Añadir</a>
      <a href="{{ route('libros.store') }}"class="ml-3 px-2 py-2 hover:text-green-300">Listado</a>
                <x-dropdown align="right">
                    <x-slot name="trigger">
                        <button class="ml-3 px-2 py-0 hover:text-green-300">
                            <div >{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
      @else

      <a href="{{ route('login') }}" class="ml-5 px-2 py-2 hover:text-green-300">Log in</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="ml-5 px-2 py-2  hover:text-green-300">Alta</a>
      @endif
      @endauth
      @endif
    </div>
  </div>
  @yield('main')

</body>

</html>