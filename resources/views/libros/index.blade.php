
@extends('base')

@section('main')

<x-guest-layout>
  <x-auth-card>
  <x-slot name="logo">
  <a href="/">
        <x-application-logo class="w-20 h-20 fill-current text-gray-600" />
      </a>

    </x-slot>
    <h1 class=' font-bold grid justify-items-center text-4xl'>Listado de libros</h1>

    </x-auth-card>
</x-guest-layout>


<table  class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
    <thead>
        <tr class="text-center border-b-2 border-gray-300">
            <td class="px-4 py-3">ISBN</td>
            <td class="px-4 py-3">Titulo</td>
            <td class="px-4 py-3">Autor</td>
            <td class="px-4 py-3">Editorial</td>
            <td class="px-4 py-3">Edición</td>
            <td class="px-4 py-3">Año</td>
            <td class="px-4 py-3">Id usuario editor</td>
            <td class="px-4 py-3">Editar libro</td>
            <td class="px-4 py-3">Borrar libro</td>
        </tr>
    </thead>
    <tbody>
        @foreach($libros as $libro)
        <tr class=" text-center bg-gray-100 border-b border-gray-300">
            <td class="px-4 py-3">{{$libro->ISBN}}</td>
            <td class="px-4 py-3">{{$libro->titulo}}</td>
            <td class="px-4 py-3">{{$libro->autor}}</td>
            <td class="px-4 py-3">{{$libro->editorial}}</td>
            <td class="px-4 py-3">{{$libro->edicion}}</td>
            <td class="px-4 py-3">{{$libro->anyo}}</td>
            <td class="px-4 py-3">{{$libro->user_id}}</td>

            <td class="px-4 py-3"><a href="{{ route('libros.edit', $libro->id)}}">
                    <x-button class='bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700'>
                        {{ __('Editar') }}
                    </x-button>
                </a>
            </td>

            <td class="px-4 py-3">


                <form method="POST"  onsubmit="return confirmation('{{$libro->ISBN}}')" action="/libros/{{$libro->id}}">


                    <x-button  class='bg-black-500 text-white font-bold py-2 px-4 rounded hover:bg-balck-700'>
                        {{ __('Eliminar') }}
                    </x-button>
                    @csrf

                    <input type="hidden" name="_method" value="DELETE" >

                </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script type="text/javascript">
     function confirmation($ISBN) 
     {
        if(confirm('Desea eliminar el libro '+$ISBN+"?"))
	{
	   return true;
	}
	else
	{
	   return false;
	}
     }

     /*
     
     Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
     */
    </script>


@endsection