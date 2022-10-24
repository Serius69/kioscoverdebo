@extends('layouts.masterADMIN')

@section('title', 'EDITAR Evento')
@section('subtitle1', 'EDITAR')
@section('subtitle2', ' Evento')
@section('body')

<!--Default Section / Other Info-->
<section class="default-section other-info">
    <!--Login Form Main-->
<!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
    <div class="modal-dialog">
        <div class="modal-content">
            <!--SignUp Section-->

            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
            </div>
            @endif
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
        <section class="donation-section">
            <div class="donation-form-outer">
                <form action="{{ route('events.update',$event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--Form Portlet-->
                    <div class="form-portlet">
                        <h4>Ingrese los datos para editar el evento   </h4>
                        <div class="row clearfix">

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">ID del Evento  <span class="required">   {{ $event->id }} </span></div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Nombre del Evento <span class="required">*</span></div>
                                <input type="text" name="name" value="{{ $event->name }}" placeholder="Nombre del Evento" required>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Fuente de Informacion <span class="required">*</span></div>
                                <input type="text" name="media" value="{{ $event->media }}" placeholder="Fuente de Informacion" required>
                                @error('media')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Descripcion <span class="required">*</span></div>
                                <textarea type="text" name="description" style="width:100%; height:200px;">
                                    {{ $event->description }}
                                    </textarea>
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label" value="{{ $event->date }}">Fecha del evento <span class="required">*</span></div>
                                
                                <input style="margin: 15px;" type="date" id="date_publication" min="2022-01-01" max="2089-12-31" name="date_publication" >
                            </div>

                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Url Externa <span class=""></span></div>
                               <input type="text" name="url" value="{{ $event->url }}" placeholder="Url Externa" required>
                                @error('url')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Imagen <span class="required">*</span></div>
                                <input
                                    type="file"
                                    name="path"
                                    id="path"
                                    class="form-control
                                    @error('image') is-invalid @enderror">

                                @error('path')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="text-right"><button type="submit" class="theme-btn btn-style-two">Actualizar</button></div>
                        </div>
                    </div>
                </form>
                <div class="text-left"><a href="{{ route('events.index') }}"><button class="theme-btn btn-style-two">Atras</button> </a></div>
            </div>

        </section>
        </div>
    <!-- /.modal-content -->
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End SignUp PopUp -->
</section>
@endsection

