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
                    <form action="{{ route('latests.update',$latest->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese los datos para editar el nuevo evento   </h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">ID del proyecto  <span class="required">   {{ $latest->id }} </span></div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Nombre de la Noticia <span class="required">*</span></div>
                                    <input type="text" name="name" value="{{ $latest->name }}" placeholder="Nombre del proyecto" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                 <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Autor <span class="required">*</span></div>
                                    <input type="text" name="author" value="{{ $latest->author }}" placeholder="Autor" required>
                                    @error('author')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Descripcion <span class="required">*</span></div>
                                    <input type="text" name="description" value="{{ $latest->description }}" placeholder="Descripcion" required>
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <strong ><h3>Tipo</h3></strong>
                                    <select name="type_id" id="type_id">
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Url Externa <span class=""></span></div>
                                    <input type="text" name="url" value="{{ $latest->url }}" placeholder="Url Imagen" required>
                                    @error('url')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Fecha de publicación <span class="required">*</span></div>
                                    
                                    <input style="margin: 15px;" type="date" id="date_publication" min="2022-01-01" max="2089-12-31" name="date_publication" >
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

