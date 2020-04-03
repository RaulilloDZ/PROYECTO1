<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
  <meta name="encoding" charset="utf-8" />
  <meta name="author" content="EPITCO" />
  <meta name="robots" content="noindex" />
  <meta name="keywords" content="epit, desarrollo, arquitectura, ingeniería, informática, impresión, formación, servicio, obra" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="theme-color" content="#1f1f1f" />

    <title>Nosotros | EPITCO</title>
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
    <link rel="stylesheet" href="css/nosotros-responsive.css">
    <!--Firebase Hosting-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <?php include_once 'templates/header.php'; ?>
        <div class="contenido-header header-ns"></div>
    </header>
    <main>
        <div id="nosotros" style="margin-top:0vh!important;">
            <div class="contenido">
                <div class="columnas">
                    <div class="ns-col-img quitar">
                        <img src="images/main-nosotros.jpg">
                    </div>
                    <div class="ns-col-p">
                        <h5>NUESTRA HISTORIA</h5>
                        <h3>Formación integral e integrada</h3>
                        <div class="col-2 quitada">
                            <img src="images/main-nosotros.jpg">
                        </div>
                        <p>EPIT nace con dos grandes objetivos. El primero es dar cabida y continuación a la formación de gran cantidad de estudiantes y recién titulados en el mundo de la ingeniería, arquitectura e informática, para ser capaces de cumplir con nuestro segundo objetivo que es dar una solución integral a las necesidades de nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="contenido">
                <h5>Nuestro Equipo</h5>
                <h3 class="txt-osc">"Una gran combinación"</h3><br>
                <img class="ns-valores" src="images/card3.png" alt="nuestro equipo"> <br>
                <p>La filosofía de nuestra empresa respecto al trabajo en equipo vas más allá de una simple relación profesional entre nuestros empleados, sino que hemos introducido una filosofía multidisciplinar tanto para el desarrollo de los proyectos de nuestro clientes como para la propia convivencia en la proyección de dichos proyectos por nuestros empleados. En nuestro equipo cabe destacar la combinación de experiencia y veteranía de nuestros seniors con juventud e inquietud de nuestras trabajadores recién titulados y alumnos que se enfrentan a su primera experiencia laboral en un marco en que la formación es constante en beneficio propio y de quienes depositan su confianza en nosotros.</p>
            </div>
            <br>
        </section>

    </main>
<?php include_once 'templates/footer.php'; ?>
