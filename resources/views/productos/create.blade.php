@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ADD PRODUCT</h1>
        <form action="{{route('prod.store')}}" method="POST">
            @csrf
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            @endif
            <div class="mb-3">
            <label for="">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
            <label for="">Descripcion: </label>
            <input type="text" name="descripcion" id="descripcion">
            </div>
            <div class="mb-3">
            <label for="">Precio: </label>
            <input type="number" name="precio" id="precio">
            </div>
            <div class="mb-3">
            <label for="">Stock: </label>
            <input type="number" name="stock" id="stock">
            </div>

            <a href="{{route('prod.list')}}" class="btn btn-secondary">Cancelar</a>
            <input type="submit" value="Enviar" class="btn btn-primary">
            
        </form>
    </div>
@endsection