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
<a class="btn btn-success" href="{{ url('/admin/createevent') }}"> Crear Evento</a>
</div>
</div>
</div>
{{-- @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p> --}}
{{-- </div>
@endif --}}
<table class="table table-bordered">
<tr>
<th>ID</th>
<th>Nombre del Evento</th>
<th>Descripcion</th>
<th>Imagen</th>
<th width="280px">Accion</th>
</tr>

{{-- error Undefined variable $events --}}
{{-- @foreach ($events as $event)
<tr>
    <td>{{ $event->id }}</td>
    <td>{{ $event->name }}</td>
    <td>{{ $event->email }}</td>
    <td>{{ $event->address }}</td>
<td>
<form action="{{ route('events.destroy',$event->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach --}}
</table>
{{-- {!! $events->links() !!} --}}
</body>
</html>


