@extends('layouts.masteradmin')
@section('title', 'ADMIN Noticias')
@section('subtitle1', 'ADMIN')
@section('subtitle2', ' Noticias')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Noticias ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('latests.create') }}"> Nueva Noticia</a>
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
            <th>Autor</th>
            <th>Descripcion</th>
            <th>Fecha publicacion</th>
            <th>Imagen</th>
            <th>URL</th>
            <th>Accion</th>
        </tr>
        @foreach ($latests as $latest)
        @if (($latest->status)==1)
        <tr><td>{{ $latest->id }}</td>            
            @if(($latest->name)==null)
            <td>No tiene nombre</td>
            @endif
            @if(($latest->name)!=null)
            <td>{{ $latest->name }}</td>
            @endif
            @if(($latest->author)==null)
            <td>No tiene autor</td>
            @endif     
            @if(($latest->author)!=null)
            <td>{{ $latest->author }}</td> 
            @endif        
            @if(($latest->description)==null)
            <td>No tiene descripcion</td>
            @endif
            @if(($latest->description)!=null)
            <td>{{ $latest->description }}</td>
            @endif
            @if(($latest->date_publication)==null)
            <td>No tiene fecha de publicacion</td>
            @endif
            @if(($latest->date_publication)!=null)
            <td>{{ $latest->date_publication }}</td>
            @endif                  
            @if(($latest->photo->path)==null)
            <td>No tiene imagen</td>
            @endif
            @if(($latest->photo->path)!=null)
            <td><img src="{{ url('img/latest/'.$latest->photo->path) }}" height="250" width="300" alt="Noticia imagen"></td>
            @endif
            @if(($latest->url)==null)
            <td>No tiene URL externa</td>
            @endif
            @if(($latest->url)!=null)
            <td> <a href="{{ $latest->url }}">URL externa</a>  </td>
            @endif
            
            <td>
                <a class="btn btn-primary" href="{{ route('latests.edit',$latest->id) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('latests.destroy',$latest->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    <ul class="pagination">
        {!! $latests->links() !!}
    </ul>
</div>

@endsection
