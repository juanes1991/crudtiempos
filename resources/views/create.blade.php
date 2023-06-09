@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Tiempo</h2>
        </div>
        <div>
            <a href="{{route('times.index')}}" class="btn btn-primary">Volver</a>
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

    <form action="{{route('times.store')}}" method="POST">

        @csrf
        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>User_id:</strong>
                    <input type="text" name="user_id" class="form-control" placeholder="user_id" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Inicio:</strong>
                    <input type="datetime-local" name="inicio" class="form-control" placeholder="inicio" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fin:</strong>
                    <input type="datetime-local" name="fin" class="form-control" placeholder="fin" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Envivo:</strong>
                    <input type="text" name="envivo" class="form-control" placeholder="envivo" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Minutos:</strong>
                    <input type="text" name="minutos" class="form-control" placeholder="minutos" >
                </div>
            </div>
            
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection