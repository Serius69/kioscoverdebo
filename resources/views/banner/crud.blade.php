@extends('layouts.masteradmin')
@section('title', 'Gestion de Banners')
@section('subtitle1', 'Gestion')
@section('subtitle2', ' de Banners')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="margin: 15px;">Gestion de Banners</h2>
            </div>
            <div class="pull-right">
            <a class="btn btn-info" style="margin: 25px;" href="{{ route('banners.create') }}"> Nuevo Banner</a>
            </div>
        </div>
    </div>
<table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Accion</th>
        </tr>
        @foreach ($banners as $banner)
        @if (($banner->status)==1)
        <tr>
            <td>{{ $banner->id }}</td>
            <td><img src="{{ url('img/banners/'.$banner->path) }}" width="700" height="350"  alt="image"></td>
            <td>
                <a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Editar</a>
                @csrf
                @method('PUT')
                <a class="btn btn-warning" href="{{ route('banners.destroy',$banner->id) }}">Eliminar</a>
            </td>
        </tr>
        @endif
        @endforeach
    </table>
    <div class="d-flex">
        {!! $banners->links() !!}
    </div>

</div>
@endsection
