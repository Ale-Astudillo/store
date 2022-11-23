<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shopping On-Line</title>
    <link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />   
    <link href="assets/css/flexslider.css" rel="stylesheet" /> 
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <img class="logo-custom" src="assets/img/logo2.png" alt="" /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">INICIO</a></li>
                    <li><a href="#testimonials-sec">PRODUCTO</a></li>
                    <li><a href="#course-sec">CONTACTO</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="home-sec" id="home">
        <div class="overlay ">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                <!-- Slider 01 -->
                                <li>
                                    <h3>Productos de alta calidad.</h3>
                                    <h1>¿QUE ESTAS ESPERANDO?<br /> ¡COMPRA AHORA!</h1>
                                    <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal"
                                        data-target="#ln">
                                        INICIAR
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal"
                                        data-target="#su">
                                        REGISTRARSE
                                    </a>

                                    <a href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal"
                                        data-target="#an">
                                        ADMINISTRADOR
                                    </a>
                                </li>
                                <!-- End Slider 01 -->

                                <!-- Slider 02 -->
                                <li>
                                    <h3>Productos de alta calidad.</h3>
                                    <h1>¿QUE ESTAS ESPERANDO? <br />¡COMPRA AHORA!</h1>
                                    <a href="#features-sec" class="btn btn-warning btn-lg" data-toggle="modal"
                                        data-target="#ln">
                                        INICIAR
                                    </a>
                                    <a href="#features-sec" class="btn btn-success btn-lg" data-toggle="modal"
                                        data-target="#su">
                                        REGISTRARSE
                                    </a>

                                    <a href="#features-sec" class="btn btn-primary btn-lg" data-toggle="modal"
                                        data-target="#an">
                                        ADMINISTRADOR
                                    </a>
                                </li>
                                <!-- End Slider 02 -->
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>    
    <!--HOME SECTION END-->

    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">
                <div class="col-lg-12  col-md-12 col-sm-12">
                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i>
                    BIENVENIDO A Shopping On-Line <i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION TAG LINE END-->

    <div id="testimonials-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">Productos </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Disfruta de todos nuestros productos a mejores precios y mayor calidad.
                </p>
            </div>
        </div>
        <!--/.HEADER LINE END-->

        <div class="row">

            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/modulo.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Módulo Led 5050</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 63</p>
                    </center>
                </div>
            </div>


            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/luces.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Tira Luces Led RGB</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 16</p>
                    </center>
                </div>
            </div>


            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/arodeluz.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Aro de Luz Multicolor</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 24</p>
                    </center>
                </div>
            </div>

            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/cables.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Cables de Red Cat 6</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 10</p>
                    </center>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/laptopHP.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Laptop HP 250 G8</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 890</p>
                    </center>
                </div>
            </div>


            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/tecladoLenovo.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Teclado Lenovo</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 75</p>
                    </center>
                </div>
            </div>


            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/a03s.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Celular A03S</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 235</p>
                    </center>
                </div>
            </div>

            <div class="col-lg-3  col-md-3 col-sm-3" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <center> <img class="img img-circle" src="assets/img/airpods.jpg"
                            style="width:100px;height:100px;" />
                        <h4>Audiculares Airpods</h4>
                        <hr />
                        <p><b>Precio:</b> &#x24; 25</p>

                    </center>
                </div>
            </div>


        </div>
    </div>
    <!-- FEATURES SECTION END-->
    <div id="course-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">Contactanos</h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                Si tiene alguna pregunta, puede contactarnos, nuestro centro de atención al cliente funciona para ti 24/7.
                    <br />Para más detalles. Consulte la información de contacto a continuación.
                </p>
            </div>

        </div>
        <!--/.HEADER LINE END-->

        <br />

        <div class="container">
            <div class="row set-row-pad">
                <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "
                    data-scroll-reveal="enter from the bottom after 0.4s">
                    <h2><strong>Nuestra ubicación </strong></h2>
                    <hr />
                    <div >
                        <h4>Manabí - Ecuador</h4>                        
                    </div>
                </div>
                 <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                        data-scroll-reveal="enter from the bottom after 0.4s">
                        <h2><strong>Comentarios  </strong></h2>
                        <hr />
                        <div>
                            <h4><strong>Celular:</strong> +593 999 888 333 </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COURSES SECTION END-->
    <div class="modal fade" id="su" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Formulario de  Registro</h4>
                </div>
                <div class="modal-body">


                    <form role="form" method="post" action="register.php">
                        <fieldset>

                            <div class="form-group">
                                <input class="form-control" placeholder="Nombre" name="ruser_firstname" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Apellido" name="ruser_lastname" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Dirección" name="ruser_address" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="ruser_email" type="email"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="ruser_password" type="password"
                                    required>
                            </div>

                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-md btn-warning btn-block" name="register">Registrarse</button>

                    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Script -->


    <div class="modal fade" id="ln" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 style="color:white" class="modal-title" id="myModalLabel">Inicio de sesión del cliente</h4>
                </div>
                <div class="modal-body">
                    <form role="form" method="post" action="userlogin.php">
                        <fieldset>

                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="user_email" type="email" required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="user_password" type="password"
                                    required>
                            </div>
                        </fieldset>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-md btn-warning btn-block" name="user_login">Acceder</button>

                    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
        <div class="modal-dialog modal-sm">
            <div style="color:white;background-color:#008CBA" class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 style="color:white" class="modal-title" id="myModalLabel">Credenciales de administrador</h4>
                </div>
                <div class="modal-body">


                    <form role="form" method="post" action="adminlogin.php">
                        <fieldset>


                            <div class="form-group">
                                <input class="form-control" placeholder="Usuario" name="admin_username" type="text"
                                    required>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="admin_password" type="password"
                                    required>
                            </div>

                        </fieldset>


                </div>
                <div class="modal-footer">

                    <button class="btn btn-md btn-warning btn-block" name="admin_login">Acceder</button>

                    <button type="button" class="btn btn-md btn-success btn-block" data-dismiss="modal">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <!-- Script -->


    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts -->
    <script src="assets/js/jquery.flexslider.js"></script>
    <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts -->
    <script src="assets/js/custom.js"></script>

</body>

</html>