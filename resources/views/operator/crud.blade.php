@extends('layouts.masteradmin')
@section('title', 'Gestion Operadores')
@section('subtitle1', 'Gestion')
@section('subtitle2', ' Operadores')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;"></h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('operators.create') }}"> Nueva Noticia</a>
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
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Video</th>
            <th>Fotos</th>
            <th>URL</th>           
            <th>Accion</th>
        </tr>
        @foreach ($operators as $operator)
        @if (($operator->status)==1)
        <tr>
            <td>{{ $operator->id }}</td>
            @if(($operator->name)==null)
            <td>No tiene nombre</td>
            @endif
            @if(($operator->name)!=null)
            <td>{{ $operator->name }}</td>
            @endif            
            @if(($operator->description)==null)
            <td>No existe Descripcion</td>
            @endif
            @if(($operator->description)!=null)
            <td>{{ $operator->description }}</td>  
            @endif                 
            @if(($operator->path_video)==null)
            <td>No existe Video</td>
            @endif
            @if(($operator->path_video)!=null)
            <td><a href="{{ url('video/'.$operator->photo->path_video)}}" class="lightbox-image video-link"><div class="icon-outer"><span class="img-circle fa fa-play"></span></div></a></td>
            @endif           
            <td><img src="{{ url('img/operadores/'.$operator->photo->path) }}" height="250" width="300" alt="Greenture"></td>
            <td> <a href="{{ $operator->url }}">URL externa</a>  </td>
            <td>
                <a class="btn btn-primary" href="{{ route('operators.edit',$operator->id) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('operators.destroy',$operator->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    {!! $operators->links() !!}
</div>

@endsection
