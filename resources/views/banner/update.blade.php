@extends('layouts.masteradmin')
@section('body')


<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-center margin-tb">
            <div class="pull-left">
                <h2>Editar Noticia</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-primary" style="margin: 15px;" href="{{ route('latests.list') }}"> Atras</a> --}}
            </div>
        </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Hay un error.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="col-md-9 col-md-center margin-tb">
            <form  action="{{ route('banners.update',$banner->id) }}" method="POST" files="true" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                 <div style="text-align: center;" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <strong ><h3>ID de la noticia {{ $banner->id}}</h3></strong>
                                </div>
                                <div class="col">
                                    <strong><h3>Imagen</h3></strong>
                                    <input type="file"  name="path" class="form-control" >
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button style="margin: 15px;" type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>




@endsection
