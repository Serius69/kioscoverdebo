@extends('layouts.masterADMIN')

@section('title', 'ADMIN Proyectos')
@section('subtitle1', 'ADMIN')
@section('subtitle2', ' Proyectos')

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

            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
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
                <form action="{{ route('projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--Form Portlet-->
                    <div class="form-portlet">
                        <h4>Editar Proyecto</h4>
                        <div class="row clearfix">

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">ID del proyecto  <span class="required">   {{ $project->id }} </span></div>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Nombre del Proyecto <span class="required">*</span></div>
                                <input type="text" name="name" value="{{ $project->name }}" placeholder="Nombre del proyecto" required>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                             <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Informacion <span class="required">*</span></div>
                                <input type="text" name="information" value="{{ $project->information }}" placeholder="Informacion" required>
                                @error('information')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Descripcion <span class="required">*</span></div>
                                <input type="text" name="description" value="{{ $project->description }}" placeholder="Descripcion" required>
                                @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                <div class="field-label">Imagen <span class="required">*</span></div>
                                <input
                                    type="file"
                                    name="path"
                                    id="inputImage"
                                    class="form-control
                                    @error('path') is-invalid @enderror">

                                @error('path')
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

