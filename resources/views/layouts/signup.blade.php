    <!--Default Section / Other Info-->
    <section class="default-section other-info">
    	<!--Login Form Main-->
    <!-- <div class="modal fade pop-box"  tabindex="-1" role="dialog" aria-labelledby="donate-popup" aria-hidden="true"> -->
        <div class="modal-dialog">
            <div class="modal-content">
                <!--SignUp Section-->
            <section class="donation-section">
                <div class="donation-form-outer">
                    <form method="post" action="http://world5.commonsupport.com/html/greenture-new/contact.html">
                        <!--Form Portlet-->
                        <div class="form-portlet">
                            <h4>Ingrese sus datos personales de manera correcta</h4>
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Nombre <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Nombre" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Correo electronico <span class="required">*</span></div>
                                    <input type="email" name="name" value="" placeholder="Email" required>
                                </div>

                                 <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Contraseña <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Last Name" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Confirmar Contraseña <span class="required">*</span></div>
                                    <input type="text" name="name" value="" placeholder="Last Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                    <div class="field-label">Telefono <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Telefono" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-12 col-xs-12">
                                    <div class="field-label">Direccion <span class=""></span></div>
                                    <input type="text" name="name" value="" placeholder="Direccion" required>
                                </div>

                            </div>
                            <div class="text-center"><button type="submit" class="theme-btn btn-style-two">Registrate</button></div>
                        </div>

                        <br>

                        <br>


                            <!-- Google button -->
                            <h3>o Ingresa directamente con tu cuenta de Google</h3>
                            <div class="g-signin2" data-width="300" data-height="200" data-longtitle="true">


                        </div>
                        <div>
                            <a href="{{ url('auth/google') }}">
                            <button type="button" class="login-with-google-btn" >
                                Sign up with Google
                              </button>
                            </a>
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
