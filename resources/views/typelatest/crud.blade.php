@extends('layouts.masteradmin')
@section('title', 'ADMIN Tipo NOticia')
@section('subtitle1', 'ADMIN')
@section('subtitle2', ' Tipo Noticias')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Tipo Noticia ADMIN</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('typelatests.create') }}"> NUevo Tipo Noticia</a>
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
            <th class="text-center">Tipo</th>
            <th class="text-center">Accion</th>
        </tr>
        @foreach ($typelatests as $typelatest)
        @if (($typelatest->status)==1)
        <tr>
            {{-- <td>{{ $typelatest->id }}</td> --}}
            <td>{{ $typelatest->type }}</td>            
            <td>
                <a class="btn btn-primary" href="{{ route('typelatests.edit',$typelatest->id) }}">Editar</a>
                <a class="btn btn-warning" href="{{ route('typelatests.destroy',$typelatest->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif

        @endforeach
    </table>
    {!! $typelatests->links() !!}

</div>
@endsection
