

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
<th>Autor</th>
<th>Descripcion</th>
<th>Imagen</th>
<th width="280px">Accion</th>
</tr>

@foreach ($latests as $latest)
<tr>
    <td>{{ $latest->id }}</td>
    <td>{{ $latest->name }}</td>
    <td>{{ $latest->author }}</td>
    <td>{{ $latest->description }}</td>
    <td><img src="{{$latest->photo->path}}"  alt="Greenture"></td>
<td>
<form action="{{ route('latests.destroy',$latest->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('latests.edit',$latest->id) }}">Editar</a>
<a class="btn btn-primary" href="{{ route('latests.destroy',$latest->id) }}">Eliminar</a>
</form>
</td>
</tr>
@endforeach
</table>
{!! $latests->links() !!}


