    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<!--Login Form Main-->
    <!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
        <div class="modal-dialog">
            <div class="modal-content">
                <!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese los datos del nuevo evento de forma correcta</h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Nombre del proyecto <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre del proyecto" required>
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                 <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Fuente de Informacion <span class="required">*</span></div>
                                    <input type="text" name="media" value="" placeholder="Fuente de Informacion" required>
                                    @error('media')
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

                                {{-- <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Url Imagen <span class=""></span></div>
                                    <input type="text" name="event_photo" value="" placeholder="Url Imagen" required>
                                    @error('eventPhoto')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <div class="field-label">Imagen <span class="required">*</span></div>
                                    <input
                                        type="file"
                                        name="image"
                                        id="inputImage"
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




