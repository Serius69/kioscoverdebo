@extends('layouts.masterADMIN')

@section('title', 'Crear Noticia')
@section('subtitle1', 'Crear')
@section('subtitle2', ' Noticia')

@section('body')
    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<!--Login Form Main-->
    <!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
        <div class="modal-dialog">
            <div class="modal-content">
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
                <!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form action="{{ route('latests.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese los datos de la nueva noticia de forma correcta</h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Nombre de la Noticia <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre de la noticia" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                 <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Fuente de Informacion <span class="required">*</span></div>
                                    <input type="text" name="author" value="" placeholder="Fuente de Informacion" required>
                                    @error('author')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Descripcion <span class="required">*</span></div>
                                    <input type="text" name="description" value="" placeholder="Descripcion" required>
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <strong ><h3>Tipo</h3></strong>
                                    <select name="type_id" id="">
                                        @foreach($types as $type)
                                        @if(($type->status)==1 )
                                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Descripcion <span class="required">*</span></div>
                                    <input type="text" name="description" value="" placeholder="Descripcion" required>
                                    @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Descripcion <span class="required">*</span></div>
                                    <input type="text" name="description" value="" placeholder="Descripcion" required>
                                    @error('description')
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
                                <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Guardar</button></div>
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

