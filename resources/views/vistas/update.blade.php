@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>UPDATE USER</h3>
        <form action="{{route('user.update.data')}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="{{ $usuario->id }}">
            
            <div class="form-group">
                <label for="">Nombre: </label>
                <input type="text" name="nombre" value="{{ $usuario->name }}" id="">
            </div>
            
            <div>
                <input type="submit" value="EDITAR" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
