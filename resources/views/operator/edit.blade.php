@extends('layouts.masterADMIN')

@section('title', 'CRUD Noticias')
@section('subtitle1', 'CRUD')
@section('subtitle2', ' Noticias')

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
                    <form action="{{ route('operators.update',$operator->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese los nuevos datos para el operador   </h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">ID del proyecto  <span class="required">   {{ $operator->id }} </span></div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Nombre del Operador <span class="required">*</span></div>
                                    <input type="text" name="name" value="{{ $operator->name }}" placeholder="Nombre del proyecto" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Descripcion <span class="required">*</span></div>
                                    <input type="text" name="description" value="{{ $operator->description }}" placeholder="Descripcion" required>
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Url Externa <span class=""></span></div>
                                    <input type="text" name="url" value="{{ $operator->url }}" placeholder="Url Imagen" required>
                                    @error('url')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Video <span class=""></span></div>
                                    <input type="text" name="path_video" value="{{ $operator->path_video }}" placeholder="Video" required>
                                    @error('path_video')
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

                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Actualizar</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            </div>
        <!-- /.modal-content -->
        <!-- </div> -->
    <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
<!-- End SignUp PopUp -->
    </section>
@endsection

