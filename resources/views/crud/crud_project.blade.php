<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ url('/admin/createproject') }}"> Crear projecto</a>
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
<th>Nombre del projecto</th>
<th>Informacion</th>
<th>Descripcion</th>
<th>Imagen</th>
<th width="280px">Accion</th>
</tr>

{{-- error Undefined variable $projects --}}
@foreach ($projects as $project)
<tr>
    <td>{{ $project->id }}</td>
    <td>{{ $project->name }}</td>
    <td>{{ $project->information }}</td>
    <td>{{ $project->description }}</td>
    <td><img src="{{$project->photo->path}}"  alt="Greenture"></td>
<td>
<form action="{{ route('projects.destroy',$project->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Editar</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $projects->links() !!}



