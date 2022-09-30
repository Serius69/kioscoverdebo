@extends('layouts.masteradmin')
@section('title', 'CRUD Projectos')
@section('subtitle1', 'CRUD')
@section('subtitle2', ' Projectos')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Proyectos ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('projects.create') }}"> Nuevo project</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Informacion</th>
            <th>Descripcion</th>
            <th>URL</th>
            <th>Imagen</th>
            <th>Accion</th>
        </tr>
        @foreach ($projects as $project)
        @if (($project->status)==1)
        <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->information }}</td>
            <td>{{ $project->description }}</td>
            <td> <a href="{{ $project->url }}">URL externa</a>  </td>
            <td><img src="{{ url('img/projects/'.$project->photo->path) }}" width="300" height="250" alt="image"></td>
            <td>
                <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Editar</a>
                @csrf
                @method('PUT')
                <a class="btn btn-warning" href="{{ route('projects.destroy',$project->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    <div class="d-flex">
        {!! $projects->links() !!}
    </div>

</div>
@endsection
