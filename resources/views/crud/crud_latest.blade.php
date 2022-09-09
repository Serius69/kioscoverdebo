<@php

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ url('/admin/createlatest') }}"> Crear Noticia</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre de la Noticia</th>
<th>Descripcion</th>
<th>Imagen</th>
<th width="280px">Accion</th>
</tr>

{{-- error Undefined variable $latests --}}

{{-- <@php
    $latest = [];
    $latests = [];
@endphp --}}
{{-- @foreach ($latests as $latest)
    <p>This is user {{ $latest->id }}</p>
@endforeach --}}

@foreach ($latests as $latest)
<tr>
    <td>{{ $latest->id }}</td>
    <td>{{ $latest->name }}</td>
    <td>{{ $latest->information }}</td>
    <td>{{ $latest->description }}</td>
    <td>{{ $latest->projectPhoto }}</td>
<td>
<form action="{{ route('latests.destroy',$latest->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('latests.edit',$latest->id) }}">Editar</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $latests->links() !!}
</body>
</html>


