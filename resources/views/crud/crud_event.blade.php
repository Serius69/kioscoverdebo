<section>
    <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ url('/admin/createevent') }}"> Crear Evento</a>
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
        <th>Nombre del Evento</th>
        <th>Media</th>
        <th>Descripcion</th>
        <th>Imagen</th>
        <th width="280px">Accion</th>
        </tr>
        {{-- error Undefined variable $events --}}
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->media }}</td>
            <td>{{ $event->description }}</td>
            <td><img src="{{$event->photo->path}}"  alt="Greenture"></td>
        <td>
        {{-- <form action="{{ route('events.destroy',$event->id) }}" method="Post"> --}}
        <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Editar</a>
        @csrf
        @method('DELETE')
        <a class="btn btn-primary" href="{{ route('events.destroy',$event->id) }}">Eliminar</a>

        </form>
        </td>
        </tr>
        @endforeach
        </table>
        {!! $events->links() !!}

</section>



