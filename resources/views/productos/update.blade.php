@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>UPDATE PRODUCT</h1>
        <form action="{{route('prod.update.data')}}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{$producto->id}}">
            <div class="mb-3">
                <label for="" class="form-label">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="{{$producto->name}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripcion: </label>
                <input type="text" name="descripcion" id="descripcion" value="{{$producto->description}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Precio: </label>
                <input type="number" name="precio" id="precio" value="{{$producto->price}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Stock: </label>
                <input type="number" name="stock" id="stock" value="{{$producto->stock}}">
            </div>
            
            <a href="{{route('prod.list')}}" class="btn btn-secondary">Cancelar</a>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
@endsection