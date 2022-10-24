@extends('layouts.masteradmin')
@section('title', 'Gestion de Eventos')
@section('subtitle1', 'Gestion de')
@section('subtitle2', ' Eventos')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Eventos ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('events.create') }}"> Nuevo Evento</a>
            </div>
        </div>
    </div>

    {{-- Message --}}
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
    @endif

<table class="table table-bordered">
        <tr>
            {{-- <th>ID</th> --}}
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>URL</th>
            <th>Accion</th>
        </tr>
        @foreach ($events as $event)
        @if (($event->status)==1)
        <tr>
            {{-- <td>{{ $event->id }}</td> --}}
            <td>{{ $event->name }}</td>       
            <td>{{ $event->description }}</td>
            <td><img src="{{ url('img/eventos/'.$event->photo->path) }}" width="300" height="200"  alt="Greenture"></td>
            <td> <a href="{{ $event->url }}">URL externa</a>  </td>
            <td>
                <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('events.destroy',$event->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    {!! $events->links() !!}

</div>
@endsection
