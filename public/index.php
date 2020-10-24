<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
<head>
    <meta name="encoding" charset="utf-8" />
    <meta name="author" content="EPITCO" />
    <meta name="description" content="Desde EPIT ofrecemos a empresas y particulares una amplia variedad de servicios para aportar soluciones a las distintas demandas en materia de ingeniería, informática y arquitectura, desde una dirección de obra, la expedición de un certificado de baja tensión o de eficiencia energética, la impresión de repuestos en 3D..." />
    <meta name="keywords" content="epit, desarrollo, arquitectura, ingeniería, informática, impresión, formación, servicio, obra" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="canonical" href="https://www.epitco.es" />
    <meta name="theme-color" content="#1f1f1f" />

    <title>EPITCO | Proyectos digitales</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/78a03bac99.js"></script>
    <!--SCROLL-->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 2000
        });
    </script>
    <!-- Tipografia -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <!-- Nuestros estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <!--Firebase Hosting-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <?php include_once 'templates/header.php'; ?>
        <div class="contenido-header header-inicio">
            <a data-scroll href="#main" class="more">Ver más</a>
        </div>
    </header>
    <main id="main">
        <section id="nosotros">
            <div class="contenido">
                <div class="columnas">
                    <div class="col-1">
                        <h5>¿QUIÉNES SOMOS?</h5>
                        <h3>Un equipo</h3>
                        <div class="col-2 quitada">
                            <img src="images/card1.png">
                        </div>
                        <p>EPIT es un nuevo concepto de empresa destinado al servicio integral en materia de ingeniería, arquitectura e informática de nuestros clientes, combinando experiencia y veteranía con juventud e inquietud en un marco en que la formación
                            es constante. <br><br><a class="btn btn-info btn-lg" href="nosotros.html" role="button">Saber más</a>
                        </p>
                    </div>
                    <div class="col-2 quitar">
                        <img src="images/card1.png" alt="conocenos">
                    </div>
                </div>
            </div>
        </section>

        <section id="oferta">
            <div class="contenido">
                <div class="columnas">
                    <div class="col-2 quitar">
                        <img src="images/card2.png" alt="nuestra oferta">
                    </div>
                    <div class="col-1">
                        <h5>¿QUÉ OFRECEMOS?</h5>
                        <h3 class="txt-osc">Nuestra oferta</h3>
                        <div class="col-2 quitada">
                            <img src="images/card2.png">
                        </div>
                        <p>Desde EPIT ofrecemos a empresas y particulares una amplia variedad de servicios para aportar soluciones a las distintas demandas en materia de ingeniería, informática y arquitectura, desde una dirección de obra, la expedición de
                            un certificado de baja tensión o de eficiencia energética, la impresión de repuestos en 3D... <br><br><a class="btn btn-info btn-lg" href="servicios.html" role="button">Ver servicios</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section id="equipo">
            <div class="contenido">
                <h5>SOLUCIONES DE CALIDAD</h5>
                <h3>Nuestro Equipo</h3><br>
                <img class="ns-valores" src="images/card3.png" alt="nuestro equipo">
                <h4>"Una gran combinación"</h4>
                <p>Nuestra filosofía de trabajo en equipo va más allá de la propia relación profesional entre nuestros empleados. Hemos introducido una concepción de empresa multidisciplinar tanto para el desarrollo de los proyectos solicitados como para
                    la propia convivencia de nuestros empleados en la proyección de dichos proyectos.
                </p>
                <a class="btn btn-info btn-lg" href="contacto.html" role="button">Contáctanos ahora</a>
            </div>
        </section>

        <section id="clientes">
            <div class="contenido">
                <h5>ELLOS CONFÍAN EN NOSOTROS</h5>
                <h3 class="txt-osc">Nuestros Clientes</h3>
                <img class="img-clientes" src="images/card4.png" alt="nuestros clientes">
                <p>Nuestra historia no se entendería sin la confianza que depositan nuestros clientes en nosotros.</p>
                <a class="btn btn-info btn-lg" href="proyectos.html" role="button">Ver proyectos</a>
                <br><br>
            </div>
        </section>

    </main>
<?php include_once 'templates/footer.php'; ?>
