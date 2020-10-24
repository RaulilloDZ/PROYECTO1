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

    <title>Actualidad | EPITCO</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">
    <!--W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/78a03bac99.js"></script>
    <!-- Tipografia -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans&display=swap" rel="stylesheet">
    <!-- Nuestros estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/actualidad-responsive.css">
    <!--Firebase Hosting-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <header>
        <?php include_once 'templates/header.php'; ?>
        <div class="contenido-header header-act"></div>
    </header>
    <main class="w3-light-grey">
        <div class="contenido">
            <h5 style="text-align: center;">ÚLTIMAS NOVEDADES</h5>
            <h3 style="color:darkgrey;">Síguenos la pista</h3>
        </div>
        <section class="w3-container">
          <!-- Blog entry -->
          <article class="w3-card-4 w3-margin w3-white">
            <img src="images/header-nosotros.jpg" alt="Nature" style="width:100%;height:200px;">
            <div class="w3-container">
              <h3 style="text-align: unset;"><b>TITLE HEADING 2</b></h3>
              <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
            </div>

            <div class="w3-container">
              <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
              <div class="w3-row">
                  <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button></p>
              </div>
            </div>
          </article>
          <hr>
          <!-- Blog entry -->
          <article class="w3-card-4 w3-margin w3-white">
            <img src="images/header-servicios.jpg" alt="Nature" style="width:100%;height:200px;">
            <div class="w3-container">
              <h3 style="text-align: unset;"><b>TITLE HEADING 1</b></h3>
              <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
            </div>

            <div class="w3-container">
              <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
              <!--
              <div class="w3-row">
                  <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button></p>
              </div>
              -->
            </div>
          </article>
          <hr>



        </section>


    </main>
<?php include_once 'templates/footer.php'; ?>
