@extends('base')
@section('main')

<div class='row'>
    <div class='col-sm-8 offset-sm-2'>
        <h1 class='display-3'>Editar</h1>

        @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method='post' action="{{ route('libros.update', $libro->id) }}">
            @method('PATCH')
            @csrf
            <div class='form-group'>
                <label for='ISBN'>ISBN:</label>
                <input type='text' class='form-control' name='ISBN' value='{{ $libro->ISBN }}' />
            </div>

            <div class='form-group'>
                <label for='titulo'>Titulo:</label>
                <input type='text' class='form-control' name='titulo' value='{{ $libro->titulo }}' />
            </div>

            <div class='form-group'>
                <label for='anyo'>Año:</label>
                <input type='date' class='form-control' name='anyo' value='{{ $libro->anyo }}' />
            </div>

            <button type='submit' class='btn btn-primary'>Actualizar</button>
        </form>
    </div>
</div>
@endsection