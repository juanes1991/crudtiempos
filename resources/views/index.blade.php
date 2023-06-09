@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD DE TIEMPOS</h2>
        </div>
        <div>
            <a href="{{route('tiempos.create')}}" class="btn btn-primary">Crear tiempo</a>
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

            @foreach ($tiempos as $tiempo)

            <tr>
                <td class="fw-bold">{{$tiempo->user_id}}</td>
                <td class="fw-bold">{{$tiempo->inicio}}</td>
                <td class="fw-bold">{{$tiempo->fin}}</td>
                <td class="fw-bold">{{$tiempo->envivo}}</td>
                <td class="fw-bold">{{$tiempo->minutos}}</td>
                <td>
                    <a href="{{route('tiempos.edit', $tiempo)}}" class="btn btn-warning">Editar</a>

                    <form action="{{route('tiempos.destroy', $tiempo)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
                
            @endforeach

            
            
        </table>

        {{$tiempos->links()}}
    </div>
</div>
@endsection