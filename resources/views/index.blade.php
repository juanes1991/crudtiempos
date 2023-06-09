@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD DE TIEMPOS</h2>
        </div>
        <div>
            <a href="{{route('times.create')}}" class="btn btn-primary">Crear tiempo</a>
        </div>
    </div>

    @if (Session::get('success'))
    <div class="alert alert-success mt-2">
        <strong>{{session::get('success')}}</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>User_id</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Envivo</th>
                <th>Minutos</th>
            </tr>

            @foreach ($times as $time)

            <tr>
                <td class="fw-bold">{{$time->user_id}}</td>
                <td class="fw-bold">{{$time->inicio}}</td>
                <td class="fw-bold">{{$time->fin}}</td>
                <td class="fw-bold">{{$time->envivo}}</td>
                <td class="fw-bold">{{$time->minutos}}</td>
                <td>
                    <a href="{{route('times.edit', $time)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('times.destroy', $time)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
                
            @endforeach

            
            
        </table>

        {{$times->links()}}
    </div>
</div>
@endsection