@extends('layouts.app')

@section('title', 'Listado de productos')

@section('styles')
    <link rel="stylesheet" href="hola.css">
@endsection

@section('content')
    <h1>PRODUCTS LIST</h1>
    <a href="{{route('prod.create')}}" class="btn btn-primary">Crear Producto</a>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>DESCRIPTION</td>
            <td>PRICE</td>  
            <td>STOCK</td>  
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->name}}</td>
                <td>{{$producto->description}}</td>
                <td>{{$producto->price}}</td>  
                <td>{{$producto->stock}}</td>  
                <td>
                    <a href="{{route('prod.update', $producto->id)}}" class="btn btn-warning">EDIT</a>
                </td>
                <td>
                    <a href="{{route('prod.destroy', $producto->id)}}" class="btn btn-danger">DELETE</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $productos->links('pagination::bootstrap-4') }}
@endsection