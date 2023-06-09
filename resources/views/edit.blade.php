@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar Tiempo</h2>
        </div>
        <div>
            <a href="{{route('tiempos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
    

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Revisa</strong> Algo esta mal..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('tiempos.update', $tiempo)}}" method="POST">

        @csrf      
        @method('PUT')

        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>User_id:</strong>
                    <input type="text" name="user_id" class="form-control" placeholder="user_id" value="{{$tiempo->user_id}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Inicio:</strong>
                    <input type="text" name="inicio" class="form-control" placeholder="inicio" value="{{$tiempo->inicio}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fin:</strong>
                    <input type="text" name="fin" class="form-control" placeholder="fin" value="{{$tiempo->fin}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Envivo:</strong>
                    <input type="text" name="envivo" class="form-control" placeholder="envivo" value="{{$tiempo->envivo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Minutos:</strong>
                    <input type="text" name="minutos" class="form-control" placeholder="minutos" value="{{$tiempo->minutos}}">
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection