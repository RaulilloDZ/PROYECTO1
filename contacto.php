<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
  <meta name="encoding" charset="utf-8" />
  <meta name="author" content="EPITCO" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="epit, desarrollo, arquitectura, ingeniería, informática, impresión, formación, servicio, obra" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

    <title>Contacto | EPITCO</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/78a03bac99.js"></script>
    <!-- Tipografia -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <!-- Nuestros estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <!--Firebase Hosting-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
    <header>
        <nav id="navbar" class="barra">
            <a href="index.html"><img id="logo" class="logo" src="images/favicon.png"></a>
            <a href="index.html">
                <p class="logo-movil-on no-selectable">EPIT CO</p>
            </a>
            <div class="myicono">
                <i class="fa fa-bars" aria-hidden="true"></i></div>
            <ul class="lista-sm">
                <li><a href="nosotros.html">NOSOTROS</a></li>
                <li class="dropdown"><a href="servicios.html" class="pre-figura">SERVICIOS </a><a class="figura"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                    <div class="dropdown-menu" style="display:none;">
                        <div style="float:left; padding-right:10px;">
                            <a class="dropdown-item" href="../servicios/diseño-grafico-y-desarrollo-web.html">Diseño y desarrollo web</a>
                            <a class="dropdown-item" href="../servicios/diseño-impresion-escaneado-3d.html">Diseño, impresión y escaneado 3D</a>
                            <a class="dropdown-item" href="../servicios/consultoria-estrategica.html">Consultoria estratégica</a>
                            <a class="dropdown-item" href="../servicios/outsourcing.html">Outsourcing</a>
                        </div>
                        <div style="float:right; margin-right: 10px;">
                            <a class="dropdown-item" href="../servicios/project-management.html">Project management</a>
                            <a class="dropdown-item" href="../servicios/formacion.html">Formación</a>
                            <a class="dropdown-item" href="../servicios/ingenieria-proyectos.html">Ingeniería de proyectos</a>
                            <a class="dropdown-item" href="../servicios/organizacion-de-eventos.html">Organización de eventos</a>
                        </div>
                    </div>
                </li>
                <li><a href="proyectos.html">PROYECTOS</a></li>
                <li><a href="actualidad.html">ACTUALIDAD</a></li>
                <li><a href="contacto.html">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenido-header contacto"></div>
        <h1 class="encabezado-seccion">Contacto</h1>
        <div class="contenedor seccion contenido-centrado">
            <?php
                  if(@$_GET['i']=='ok') {  ?>

                <h3 class="centro">La consulta se envió correctamente.</h3>
                <br>
                <div class="submit">
                    <a href="contacto.php" class="btn btn-info btn-lg">Volver a contactar</a>
                </div>
                <br>
                <?php
                  } else{
                ?>
            <form class="contacto" action="envio-formulario.php" method="post" enctype="multipart/form-data">

                <fieldset>
                    <legend>Informacion personal</legend>

                    <label for="nombre">* Nombre y apellidos</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <label for="email">* Email</label>
                    <input type="email" name="email" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">

                    <label for="telefono">* Teléfono</label>
                    <input type="tel" name="telefono" id="telefono" required pattern="[0-9]{9}">

                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje"></textarea>

                </fieldset>

                <div class="submit">
                    <input type="submit" value="Enviar" class="btn btn-info btn-lg">
                </div>

                <p>Los campos marcados con * son de cumplimentación obligatoria.</p>
            </form>
            <?php } ?>
        </div>

    </main>
    <footer>
        <div class="footer">
            <div class="footer-col-1-2">
                <h4>Síguenos en:</h4>
                <div class="redes-sociales">
                    <a href="www.twitter.com/"><img src="images/twitter.svg"></a>
                    <a href="www.instagram.com/"><img src="images/instagram.svg"></a>
                    <a href="www.linkedin.com/"><img src="images/linkedin.svg"></a>
                    <a href="www.facebook.com"><img src="images/facebook.svg"></a>
                </div>
            </div>
            <div class="footer-col-3">
                <h4>Contacto</h4>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>Teléfono: 123 45 67 89</p>
                <i class="fa fa-at" aria-hidden="true"></i>
                <p>Correo: algo@epitco.com</p>
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <p>Localización: C/... , 32, Cartagena</p>
            </div>
        </div>
        <hr>
        <div class="copy">
            <p><a href="#">Politica de privacidad</a></p>
            <script type="text/javascript">
                update = new Date().getFullYear();
                document.write("EPIT CO Copyright &copy; " + update + " " + "All Rights Reserved.");
            </script>
        </div>
    </footer>




    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <!--MENU DROPDOWN-->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown").click(function() {
                $(".dropdown-menu").slideToggle("fast");
            });
        });
    </script>
    <!-- DETECTO EL SCROLL -->
    <script>
        $(window).scroll(function() {
            if ($("#navbar").offset().top > 10 && screen.width > 600) {
                $("#navbar").addClass("barra-scroll");
                $("#logo").addClass("lg-scroll");

            } else {
                $("#navbar").removeClass("barra-scroll");
                $("#logo").removeClass("lg-scroll");

            }
        });
    </script>
    <!--estos de abajo no borrar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/menuResponsive.js"></script>
</body>

</html>
